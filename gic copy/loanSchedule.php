<?php 
$themeUrl = Yii::app()->theme->baseUrl;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>GICL</title>
	<link href="<?= $themeUrl ?>/css/bootstrap.min.css" rel="Stylesheet" type="text/css" />
	<link href="<?= $themeUrl ?>/css/font.css" rel="Stylesheet" type="text/css" />
	<link href="<?= $themeUrl ?>/css/loan_calculator.css" rel="Stylesheet" type="text/css" />
	<link href="<?= $themeUrl ?>/css/common.css" rel="Stylesheet" type="text/css" />
	<script src="<?= $themeUrl ?>/scripts/jquery-1.11.0.min.js"></script>
	<script src="<?= $themeUrl ?>/scripts/bootstrap.min.js"></script>
	<script src="<?= $themeUrl ?>/scripts/common.js"></script>
</head>
<body>
	<div id="loan_calculator">
		<!-- <div class="loan_calculator_header">
			<div class="wrap">
				
			</div>			
		</div> -->
		<div class="wrap"> 
			<div class="loan_calculator_content"> 
				<div class="top">
					<img src="<?= $themeUrl ?>/images/Logo.png">
					<h2>環球物業按揭有限公司</h2>
					<h2>Global Property Finance Limited</h2>
					<p>(Subsidiary of Global International Credit Limited – 環球信貸有限公司之附屬公司)</p>
					<div class="top_right">
						<p>Money Lenders License No. : 64/2015</p>
						<p>Agreement Number: <?php echo $loan_model->apply_no;?></p>
					</div>
				</div>
				<div class="middle">
					<h3>Repayment Schedule 還款表</h3>
					<ul class="schedule clearfix">
						<li>
							<ul class="clearfix">
							<!-- 
								<li>
									<p data-label="Name of Borrower 借款人姓名 : ">Name of Borrower 借款人姓名</p>
									<p data-label="Loan No. 貸款編號 : ">Loan No. 貸款編號</p>
									<p data-label="Loan Amount 貸款金額 : ">Loan Amount 貸款金額</p>
									<p data-label="Total Tenors 供款期數 : ">Total Tenors 供款期數</p>
								</li>
							 -->
								<li>
									<p data-label="Name of Borrower 借款人姓名 : "> <?php echo $member_model->firstname.' '.$member_model->lastname;?></p>
									<p data-label="Loan No. 貸款編號 : "> <?php echo $loan_model->apply_no;?></p>
									<p data-label="Loan Amount 貸款金額 : "> <?php echo $loan_model->amount;?></p>
									<p data-label="Total Tenors 供款期數 : "> <?php echo $loan_model->tenor;?></p>
								</li>
							</ul>
						</li>
						<li>
							<ul>
							<!--
								<li>
									<p>&nbsp;</p>
									<p>Loan Date 起息日期</p>
									<p>Interest Method 計息方法</p>
									<p>Repay. Cycle 還款週期</p>
								</li>
							  -->
								<li>
									<p>&nbsp;</p>
									<p data-label="Loan Date 起息日期 : "> <?php echo date('Ymd',time()+24*3600);?></p>
									<p data-label="Interest Method 計息方法 : "> Amortization 息隨本減</p>
									<p data-label="Repay. Cycle 還款週期 : "> Monthly 每月</p>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="bottom table-responsive">
					<table class="table table-striped ">
					   <!-- <caption>Amrotization Schedule</caption> -->
						   <thead>
							    <tr>
							        <th><p>Tenor</p><p>期數</p></th>
							        <th><p>Due Date</p><p>供款日期</p></th>
							        <th><p>Int. Rate</p><p>年利率</p></th>
							        <th><p>Principal</p><p>本金</p></th>
							        <th><p>Interest</p><p>利息</p></th>
							        <th><p>Repay. Amount</p><p>供款金額</p></th>
							        <th><p>Balance</p><p>尚欠本金</p></th>
							    </tr>
						   </thead>
						   <tbody>
						   <?php 
						   	$interest_rate = $interest_rate==0?26:$interest_rate;
						   	$balance = $loan_model->amount;
						   	$interest_total = 0;
							//$du_date = $first_due_date;
						   	$due_date= '2016-03-31';
						   	$due_date_ary = explode( '-',$due_date);
						   	$year = $due_date_ary['0'];
						   	$month = $due_date_ary['1'];
						   	$day = $due_date_ary['2']; 
						   for ($i=1;$i<=$loan_model->tenor;$i++){
						   	$repay_amount = round($loan_model->amount*$flat_rate/100+$loan_model->amount/$loan_model->tenor);
						   	$interest = round($balance*$interest_rate/100/12);
						   	if($i==1){
								$day_num = round((strtotime($due_date)-time())/(24*3600));
								$interest = round($balance*$interest_rate/100/360*$day_num);
								$repay_amount = $repay_amount-round($balance*$interest_rate/100/360*(30-$day_num));
							}
						   	
						   	$principal = $repay_amount-$interest;
						   	if($i == $loan_model->tenor){
								$principal = $balance;
								$repay_amount = $balance+$interest;
							}
						   	$balance = $balance-$principal;
						   	//due date
						   	if($month==12)
						   		$year ++;
						   	$month++;
						   	$month = $month%12 ==0 ?12:$month%12; 
						   	$due_date = $year.'-'.$month.'-'.$day;
						   	if(($day==31 || $day==30) && $month ==2){
								$due_date = $year.'-'.$month.'-28';
								if ($year%4==0 && ($year%100!=0 || $year%400==0))
									$due_date = $year.'-'.$month.'-29';	
						   	}
						   	if($day==31 && ($month==4 || $month==6 || $month==9 ||$month==11))
						   		$due_date = $year.'-'.$month.'-30';
						   ?>
							    <tr>
							        <td data-label="期數"><?php echo $i;?></td>
							        <td data-label="供款日期"><?php echo $due_date;?></td>
							        <td data-label="年利率"><?php echo $interest_rate.'%';?></td>
							        <td data-label="本金"><?php echo $principal;?></td>
							        <td data-label="利息"><?php echo $interest;?></td>
							        <td data-label="供款金額"><?php echo $repay_amount;?></td>
							        <td data-label="尚欠本金"><?php echo $balance;?></td>
							    </tr>
						   <?php
						       $interest_total +=$interest; 
                           }?>
						   </tbody>
					</table>
					<div class="divider"></div>
		        	<div class="divider"></div>
					<table class="table table-striped">
						<tr>
				            <td></td>
				            <td></td>
				            <td>Total 總額:</td>
				            <td data-label="Principal 本金"><?php echo $loan_model->amount;?></td>
				            <td data-label="Interest 利息"><?php echo $interest_total;?></td>
				            <td data-label="Repay.Amount 供款金额"><?php echo $loan_model->amount+$interest_total;?></td>
				            <td></td>
				        </tr>
					</table> 
				</div>
			</div>
		</div>
	</div>
</body>
</html>