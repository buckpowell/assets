<?php

namespace app\controllers;

use Yii;
use app\models\UserData;
use app\models\User;
use app\models\Account;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Mpdf\Mpdf;

/**
 * AccountDataController implements the CRUD actions for UserData model.
 */
class AccountDataController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all UserData models.
     * @return mixed
     */
    public function actionIndex()
    {
		$id = $_SESSION['__id'];
        
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->asset_id]);
        }

        return $this->render('update', [
            'model' => $model, 
        ]);
    }

/**
     * Displays a single Account model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView()
    {
		$id = $_SESSION['__id'];
        $account =  Account::findOne($id);
	
        return $this->render('view', [
            'model' => $this->findModel($id),
			'account' => $account
        ]);
		
    }

    /**
     * Updates an existing UserData model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate()
    {
		$id = $_SESSION['__id'];
		
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->asset_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Finds the UserData model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserData the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserData::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
	
	public function actionPrint($id) {
		
		$account = Account::findOne($id);
		$model = $this->findModel($id);
		
		$mpdf = new \Mpdf\Mpdf([
			'margin_left' => 15,
			'margin_right' => 15,
			'margin_top' => 15,
			'margin_bottom' => 15,
			'margin_header' => 15,
			'margin_footer' => 15
		]);
		$html = '<html>';
		$html .='<head>';
		$html .= '<style>';
		$html .= 'td {font-size:10px}';
		$html .='.table_border {border:1}';
		$html .='.td_label {align:left}';
		$html .='.td_data {align:right}';
		$html .='th {font-size:11px}';
		$html .= '</style>';
		$html .='</head>';
		$html .='<body margin="0">';
		$html .= '<h5 align="center">Personal Financial Statement</h5>';
		$html .='<h6 align="right">Date: ' . date("M d, Y", strtotime($model->entry_date)) . '</h6>';
		$html .='<h5 align="center">Personal Information</h5>';
		$html .= '<table width="100%">';
		$html .= '<tr>';
		$html.= '<td>Name: ' . $account->first_name . ' ' . $account->mi . ' ' .$account->last_name . '</td>';
		$html.= '<td>SSN :' . $account->ssn . '</td>';
		$html.= '</tr>';
		$html .= '<tr>';
		$html.= '<td>Address: ' . $account->address . '</td>';
		$html.= '<td>Birthdate : ' . date("M d, Y", strtotime($account->dob)) . '</td>';
		$html.= '</tr>';
		$html .= '<tr>';
		$html.= '<td>City, State Zip : ' . $account->city . ', ' . $account->us_state . ' ' .$account->zip . '</td>';
		$html.= '<td>Phone: ' . $account->phone . '</td>';
		$html.= '</tr>';
		$html .= '</table>';
		$html .='<hr>';
		$html.='<table width="100%">';
		$html .= '<tr border="1">';
		$html.= '<th colspan="2">ASSETS</th><th colspan="2">LIABILITIES</th>';
		$html.= '</tr>';
		$html .='<tr>';
		$html .='<td align="left"><label for="cash">Cash on Hand & in Banks:</label></td><td align="right">' . '$' . number_format($model->cash,0) . '</td><td style="padding-left: 10px;">Notes Due to Banks:</td><td align="right">' . '$' .number_format($model->notes_to_banks,0).'</td>';
		$html .='</tr>';
		$html .='<tr>';
		$html .='<td align="left"><label for="cash">Certificates of Deposit:</label></td><td align="right">' . '$' . number_format($model->certificates_of_deposit,0) . '</td><td style="padding-left: 10px;">Notes Due to Relatives & Friends:</td><td align="right">' . '$' .number_format($model->notes_to_relatives,0).'</td>';
		$html .='</tr>';
		$html .='<tr>';
		$html .='<td align="left"><label for="assets_conv_to_cash">Cash Value of Life Insurance:</label></td><td align="right">' . '$' . number_format($model->life_insurance,0) . '</td><td style="padding-left: 10px;"> Notes Due Others:</td><td align="right">' . '$' .number_format($model->notes_to_others,0).'</td>';
		$html .='</tr>';
		$html .='<tr>';
		$html .='<td align="left"><label for="bonds">Stocks & Bonds:</label></td><td align="right">' . '$' . number_format($model->securities,0) . '</td><td style="padding-left: 10px;">Accounts & Bills Payable:</td><td align="right">' . '$' .number_format($model->accounts_payable,0).'</td>';
		$html .='</tr>';
		$html .='<tr>';
		$html .='<td><label for="other_securitites">Other Securities(Marketble):</label></td><td align="right">' . '$' . number_format($model->other_securities,0) . '</td><td style="padding-left: 10px;">Unpaid Income Tax(Federal/State):</td><td align="right">' . '$' .number_format($model->unpaid_income_tax,0).'</td>';
		$html.='</tr>';
		$html.='<tr>';
		$html .='<td><label for="accounts_receiveable_good">Notes & Accts Receivable(Good):</label></td><td align="right">' . '$' . number_format($model->accounts_receivable_good,0) . '</td><td style="padding-left: 10px;">Other Unpaid Taxes & Interest:</td><td align="right">' . '$' .number_format($model->other_unpaid_tax,0).'</td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td><label for="assets_conv_to_cash">Other Assets Conv to Cash):</label></td><td align="right">' . '$' . number_format($model->assets_conv_to_cash,0) . '</td><td style="padding-left: 10px;">Loans on Life Insurance Policies:</td><td align="right">' . '$' .number_format($model->loans_on_life_insurance,0).'</td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td><label for="other_investments">Other Investments:</label></td><td align="right">' . '$' . number_format($model->other_investments,0) . '</td><td  style="padding-left: 10px;">Contract Accts Payable:</td><td align="right">' . '$' .number_format($model->contract_accounts_payable,0).'</td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td>&nbsp;</td><td align="right"></td><td  style="padding-left: 10px;">Mortgage/Rent Due:</td><td align="right">' . '$' .number_format($model->cash_rent_owed,0).'</td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td><label for="blank">&nbsp;</label></td><td>&nbsp;</td><td style="padding-left: 10px;"><label for="blank">Other Liabilities Due</label></td><td align="right">' . '$' .number_format($model->other_liabilities,0).'</td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td><label for="total_current_assets">TOTAL CURRENT ASSETS</label></td><td align="right">' . '$' . number_format($model->total_current_assets,0) . '</td><td style="padding-left: 10px;">TOTAL CURRENT LIABLIITIES</td><td align="right">' . '$' .number_format($model->total_current_liabilities,0).'</td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td><label for="real_estate_owned">Real Estate Owned:</label></td><td align="right">' . '$' . number_format($model->real_estate,0) . '</td><td style="padding-left: 10px;">Real Estate Mortgage Payable:</td><td align="right">' . '$' .number_format($model->mortgage_payable,0).'</td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td><label for="mortgages_and contracts_owned">Mortgages & Contracts Owned:</label></td><td align="right">' . '$' . number_format($model->mortgages_owned,0) . '</td><td style="padding-left: 10px;">Liens & Assessments Payable:</td><td align="right">' . '$' .number_format($model->liens_payable,0).'</td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td><label for="accts_receiveabla">Other Securities(Not Marketable):</label></td><td align="right">' . '$' . number_format($model->accounts_receivable_doubt,0) . '</td><td style="padding-left: 10px;">Other Debts:</td><td align="right">' . '$' .number_format($model->other_debts,0).'</td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td><label for="personal_property">Personal Porperty:</label></td><td align="right">' . '$' . number_format($model->personal_property,0) . '</td><td>&nbsp;</td><td style="padding-left: 10px;">&nbsp;</td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td><label for="other_assets">Other Assets:</label></td><td align="right">' . '$' . number_format($model->other_assets) . '</td><td>&nbsp;</td><td style="padding-left: 10px;">&nbsp;</td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td><label for="total_assets">TOTAL ASSETS</label></td><td align="right">' . '$' . number_format($model->total_assets) . '</td><td style="padding-left: 10px;">TOTAL LIABILITIES</td><td align="right">' . '$' .number_format($model->total_liabilities).'</td>';
		$html .='</tr>';
		$html .='<tr>';
		$html .='<td colspan="4"><hr></td>';
		$html .='</tr>';
		$html.='<tr>';
		$html .='<td><label for="total_assets"><b>NET WORTH(Total Assets - Total Liabilities)</b></label></td><td align="right">' . '$' . number_format($model->net_worth,0) . '</td>';
		$html .= '</tr>';
		$html .='</table>';
		$html .='</body>';
		$html .='</html>';
		
		
	
		$mpdf->SetProtection(array('print'));
		$mpdf->SetTitle("Financial Statement");
		$mpdf->SetAuthor("Buck.");
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}
	
}
