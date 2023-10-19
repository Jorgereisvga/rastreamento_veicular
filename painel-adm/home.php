<?php
@session_start();
if(@$_SESSION['nivel_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Admin'){
	echo "<script language='javascript'> window.location='../index.php' </script>";
}

require_once("../connect.php"); 


//totais dos cards
$hoje = date('Y-m-d');
$mes_atual = Date('m');
$ano_atual = Date('Y');
$dataInicioMes = $ano_atual."-".$mes_atual."-01";

?>

<div class="row">
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Saídas de veiculos (data)</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$entradas ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-truck fa-2x text-success"></i>
						<i class="fas fa-car fa-2x text-danger"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-danger shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Entrada de veiculos (data)</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$saidas ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-car fa-2x text-danger"></i>
						<i class="fas fa-truck fa-2x text-primary"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card <?php echo $corTotal2 ?> shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold <?php echo $corTotal ?> text-uppercase mb-1">N° de motoristas</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">N° <?php //echo @$saldo ?> 0</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-user fa-2x <?php echo $corTotal ?>"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card <?php echo $corTotal2Mes ?> shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold <?php echo $corTotalMes ?> text-uppercase mb-1">Alertas</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">N° <?php //echo @$saldoMes ?> 3</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-exclamation-triangle fa-2x text-warning <?php// echo $corTotalMes ?>"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>








<div class="row">
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-danger shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">% Finalizados</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"> 20<?php //echo @$totalInad ?>%</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-danger"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-danger shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Veiculos em manutenção</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">N°<?php echo @$totalInad ?> 2</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-success"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php /*
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Vencimentos Dia</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalAprovados ?> </div>
					</div>
					<div class="col-auto" align="center">
						<i class="fas fa-clipboard-list fa-2x text-primary"></i>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-danger shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Vencimento R$</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalServPendentes ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-danger"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>







<div class="row">
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Motoristas Cadastrados</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalAlunos ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-users fa-2x text-info"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total administradores</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalProf ?> </div>
					</div>
					<div class="col-auto">
						<i class="fas fa-users fa-2x text-success"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<!-- <div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Disciplinas</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php //echo @$totalDisc ?> </div>
					</div>
					<div class="col-auto" align="center">
						<i class="fas fa-clipboard-list fa-2x text-primary"></i>

					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-secondary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total Rotas</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$totalTurmas ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-clipboard-list fa-2x text-secondary"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
*/?>
</div>
<div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.310191980626!2d-45.480596224808714!3d-21.573811791595418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ca928492de75a7%3A0x3ad17fb0fb012f5f!2sGrupo%20Unis%20-%20Cidade%20Universit%C3%A1ria!5e0!3m2!1spt-BR!2sbr!4v1696029183642!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>