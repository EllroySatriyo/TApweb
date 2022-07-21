<!DOCTYPE html>
<html>
<head>
	<script src="jscal.js"></script>
    <link rel="stylesheet" type="text/css" href="stylecal.css">
</head>
<body background="backg.jpg">
	<table border="0" width="100%">
		<tr>
			<td style="width: 100px; ">
				<iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
				<form action="tulis.php" method="post" target="dummyframe">
				Nama <input type="text" name="nama" id="nama" style="width: 200px; height: 20px"><br>
				NIM &nbsp;&nbsp;<input type="text" name="nim" id="nim" style="width: 200px; height: 20px"><br>
				<input type="submit" name="confirm" value="Submit"><input type="reset" name="ulang" value="Reset">
				</form></td>
			<td>
				&nbsp;
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><table align="center"  border="5" width="330px"> 
         <tr>
            <td colspan="4" class="title">Kalkulator</td>
         </tr>
         <tr> 
            <td colspan="3"><input type="text" id="result"/></td> 
            <td><input class="ekor" type="button" value="C" onclick="clr()"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="1" onclick="dis('1')"/> </td> 
            <td><input type="button" value="2" onclick="dis('2')"/> </td> 
            <td><input type="button" value="3" onclick="dis('3')"/> </td>
            <td><input class="kode" type="button" value="+" onclick="dis('+')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="4" onclick="dis('4')"/> </td> 
            <td><input type="button" value="5" onclick="dis('5')"/> </td> 
            <td><input type="button" value="6" onclick="dis('6')"/> </td> 
            <td><input class="kode" type="button" value="-" onclick="dis('-')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="7" onclick="dis('7')"/> </td> 
            <td><input type="button" value="8" onclick="dis('8')"/> </td> 
            <td><input type="button" value="9" onclick="dis('9')"/> </td> 
            <td><input class="kode" type="button" value="/" onclick="dis('/')"/> </td>  
         </tr> 
         <tr> 
            <td><input type="button" value="." onclick="dis('.')"/> </td> 
            <td><input type="button" value="0" onclick="dis('0')"/> </td>
            <td><input class="ekor" type="button" value="=" onclick="solve()"/> </td> 
            <td><input class="kode" type="button" value="x" onclick="dis('*')"/> </td> 
         </tr> 
      </table></td>
      		<tr>
      			<td>&nbsp;</td>
				<td>
					<?php
						$hari=date("d");
						$bulan=date("m");
						$tahun=date("Y");
						$jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
						?>
						<br><br>
						<?php
						switch ($bulan) {
							case 1: $nmbulan="Januari"; break;
							case 2: $nmbulan="Februari"; break;
							case 3: $nmbulan="Maret"; break;
							case 4: $nmbulan="April"; break;
							case 5: $nmbulan="Mei"; break;
							case 6: $nmbulan="Juni"; break;
							case 7: $nmbulan="Juli"; break;
							case 8: $nmbulan="Agustus"; break;
							case 9: $nmbulan="September"; break;
							case 10: $nmbulan="Oktober"; break;
							case 11: $nmbulan="November"; break;
							case 12: $nmbulan="Desember"; break;
						}
						echo "<center><h1>$nmbulan $tahun</h1></center>";?>
						<br>
						<table style="border:2px solid #1E90FF" align="center" cellpadding="10">
							<tr bgcolor="#AADD8E6">
								<td align="center"><font color="#FF0000">Min</font></td>
								<td align="center">Sen</td>
								<td align="center">Sel</td>
								<td align="center">Rab</td>
								<td align="center">Kam</td>
								<td align="center">Jum</td>
								<td align="center">Sab</td>
							</tr>
						<?php
						$s=date("w",mktime(0,0,0,$bulan,1,$tahun));
						for ($ds=1; $ds <= $s; $ds++) { 
							echo "<td></td>";
						}
						for ($d=1; $d <= $jumlahhari; $d++) { 
							if(date("w",mktime(0,0,0,$bulan,$d,$tahun))==0){
								echo "<tr>";
							}
							$warna="#000000";
							if (date("1",mktime(0,0,0,$bulan,$d,$tahun))=="Sunday") {
									$warna="FF0000";
							}
							echo "<td align=center valign=middle><span style=\"color:$warna\">$d</span></td>";
							if (date("w",mktime(0,0,0,$bulan,$d,$tahun))==6) {
								echo "</tr>";
							}
						}
						echo'</table>';
						?>
				</td>
		</tr>
	</table>
</body>
</html>