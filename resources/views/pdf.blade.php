<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Letter landscape</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  
  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: letter landscape }</style>
  <style type='text/css'>
	@page { margin: 0!important ;
	
	}




/** For screen preview **/
@media screen {
  body { background: #e0e0e0 }
  .sheet {
    background: white;
    box-shadow: 0 .5mm 2mm rgba(0,0,0,.3);
    margin: 5mm auto;
  }


  body { margin: 0 }
.sheet {
  margin: 0;
  overflow: hidden;
  position: relative;
  box-sizing: border-box;
  break-inside: avoid;
  /* page-break-after: always; */
  max-width: 280mm!important; max-height: 210mm!important;
}

/** Paper sizes **/
.A3               .sheet { width: 297mm; height: 419mm }
.A3.landscape     .sheet { width: 420mm; height: 296mm }
.A4               .sheet { width: 210mm; height: 296mm }
.A4.landscape     .sheet { width: 297mm; height: 209mm }
.A5               .sheet { width: 148mm; height: 209mm }
.A5.landscape     .sheet { width: 210mm; height: 147mm }
.letter           .sheet { width: 216mm; height: 279mm }
.letter.landscape .sheet { width: 280mm; height: 215mm }
.legal            .sheet { width: 216mm; height: 356mm }
.legal.landscape  .sheet { width: 357mm; height: 215mm }

/** Padding area **/
.sheet.padding-10mm { padding: 10mm }
.sheet.padding-15mm { padding: 15mm }
.sheet.padding-20mm { padding: 20mm }
.sheet.padding-25mm { padding: 25mm }

.table{ border-style: solid;}
}

/** Fix for Chrome issue #273306 **/
@media print {
           .A3.landscape { width: 420mm }
  .A3, body.A4.landscape { width: 297mm }
  .A4, body.A5.landscape { width: 210mm }
  .A5                    { width: 148mm }
  .letter, body.legal    { width: 216mm }
  .letter.landscape      { width: 280mm;  max-height: 210mm!important; margin: 0!important ;}
  .legal.landscape       { width: 357mm }
   .table{ border-style: solid;}
}
</style>
<style>
	.td200{
		min-width: 200px!important;
	}
	.td300{
		min-width: 300px!important;
	}
	.td400{
		min-width: 400px!important;
	}
	.tdhalf{
		min-width: 50%!important;
	}
	.footer {
   position: relative;
   left: 10;
   top:60%;
   bottom: 0px;
   width: 100%;
   /* background-color: red; */
   color: black;
   text-align: center;
   max-width: 280mm!important;
   margin: 5mm auto;
   
}
	</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body>
<div class="letter landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet ">

    <!-- Write HTML just like a web page -->

	<table class='table'>
		<thead>
		<tr style='height:25px' class="table-full" class='r1'>
			<td class="td300" colspan='2'>
			
			</td>
			<td   class="td400" colspan='10'>
				ANNUAL GENDER AND DEVELOPMENT (GAD) PLAN AND BUDGET
			</td>
			
		</tr>
		<tr style='height:25px' class='r1'>
			<td class="td300" colspan='2'>
			
			</td>
			<td   class="td200" colspan='2'>
				
			</td>
			<td   class="td400" colspan='6'>
				FY2022
			</td>
			
		</tr>
		<tr style='height:25px' class='r1'>
			<td class="tdhalf" colspan='2'>Organization: Cavite State University</td>
			<td   class="tdhalf" colspan='6'>Organization Category: State Universities and Colleges, State Universities and Colleges</td>
			
		</tr>
		<tr style='height:25px' class='r1'>
			<td class="tdhalf" colspan='12'>Organization Hierarchy: Cavite State University</td>
		</tr>
		<tr>
			<td class="tdhalf" colspan='2'>Total Budget/GAA of Organization:</td>
			<td   class="tdhalf" colspan='4'>606,906,000.00</td>
			
		</tr>
		<tr>
			
			<td class="tdhalf" colspan='2'>Total GAD Budget :</td>
			<td   class="tdhalf" colspan='4'>606,906,000.00</td>
			<td   class="tdhalf" colspan='4'>Primary Sources : 36,866,906.00<br/> Other Sources : 0.00</td>
		</tr>
		<tr>
			
			<td class="tdhalf" colspan='2'>% of GAD Allocation:</td>
			<td   class="tdhalf" colspan='2'>6.07%</td>
			
		</tr>

		</thead>
		
	</table>

	<div class="footer  ">
		<table>
			<tr>
				<td><img width="100px" height="100px" src="data:image/jpeg;base64,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"/></td>
				<td>THIS IS TO CERTIFY THAT THIS DOCUMENT HAS BEEN
					REVIEWED AND ENDORSED THROUGH THE GMMS
				</td>
				<td>SUSAN G. TAN, PHD
					DIRECTOR, GADRC
					</td>
				<td>DR. HERNANDO D. ROBLES,
					CEO VI
					UNIVERSITY PRESIDENT</td>
				<td><img width="100px" height="100px" src="https://w7.pngwing.com/pngs/619/184/png-transparent-qr-code-barcode-scanners-scanner-q-text-rectangle-logo.png"/></td>
				<td>REPORT GENERATED: 07/14/2022
					PAGE 1 OF 31
					</td>
			</tr>
		</table>
	  </div>

	</div>  
  </section>

</body>



<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<div class="letter landscape">

	<!-- Each sheet element should have the class "sheet" -->
	<!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
	<section class="sheet ">
  
	  <!-- Write HTML just like a web page -->
  
	  <table class='t'>
		  <thead>
		  <tr>
			<td></td>
			<td>Gender Issue
				/GAD Mandate</td>
			<td>Cause of
				Gender Issue</td>
			<td>GAD Result
				Statement
				/GAD Objective</td>
				<td>Relevant Organization
					MFO/PAP or PPA</td>
				<td>GAD Activity</td>
				<td>Performance
					Indicators
					/Targets</td>
				<td>GAD Budget</td>
				<td>Source
					of Budget</td>
				<td>Responsible Unit
					/Office
					</td>

		</tr>
		  
  
		  </thead>
		  
	  </table>
  
	  <div class="footer  ">
		  <table>
			  <tr>
				  <td><img width="100px" height="100px" src="data:image/jpeg;base64,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"/></td>
				  <td>THIS IS TO CERTIFY THAT THIS DOCUMENT HAS BEEN
					  REVIEWED AND ENDORSED THROUGH THE GMMS
				  </td>
				  <td>SUSAN G. TAN, PHD
					  DIRECTOR, GADRC
					  </td>
				  <td>DR. HERNANDO D. ROBLES,
					  CEO VI
					  UNIVERSITY PRESIDENT</td>
				  <td><img width="100px" height="100px" src="https://w7.pngwing.com/pngs/619/184/png-transparent-qr-code-barcode-scanners-scanner-q-text-rectangle-logo.png"/></td>
				  <td>REPORT GENERATED: 07/14/2022
					  PAGE 1 OF 31
					  </td>
			  </tr>
		  </table>
		</div>
  
  
	</section>
</div>  
  </body>
  
</html>
