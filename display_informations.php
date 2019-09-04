<?php
include 'connexion.php';
$ri_range = $_POST['ri_range'];
$ri_range_array = explode(';',$ri_range);

$min_RI = $ri_range_array[0];
$max_RI = $ri_range_array[1];
/*
echo $min_RI;
echo('<br/>');
echo $max_RI;
*/
try{
		# code...
		$sql = "SELECT * FROM infanterie WHERE num_ri BETWEEN $min_RI AND $max_RI;";
		//echo($sql);
		//$result = $conn->query($sql);
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		//var_dump($result);
?>
<table id="example" class="table table-bordered striped" style="width:100%">
	<thead>
		<tr>
			<th>RI</th>
			<th>Grade - Identité - Origine </th>
			<th>Affectation </th>
			<th>Date </th>
			<th>Condition & lieu décès </th>
		</tr>
	</thead>
	<tbody>	
		<?php 
			if ($statement->rowCount() > 0) {
				foreach($result as $row) {
					$id = $row["id"];
					$num_ri = $row["num_ri"];
					$grade = $row["grade"];
					$affectation = $row["affectation"];
					$dateInf = $row["dateInf"];
					$conditionsInf = $row["conditionsInf"];
		?>
			<tr>
				<td><?php echo $num_ri ?></td>
				<td><?php echo $grade ?></td>
				<td><?php echo $affectation ?></td>
				<td><?php echo $dateInf ?></td>
				<td><?php echo $conditionsInf ?></td>
			</tr>
		<?php 
				}
			} 
		?>
		
	</tbody>
 </table>
 	<script type="text/javascript" class="init">	
		$('#example').DataTable( {			
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			dom: 'Bfrtip',
			buttons: [
				'excelHtml5',
			]
		});

	</script>
<?php		
	}catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
?>