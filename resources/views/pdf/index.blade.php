<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$data->titulli}}</title>

	<style>
	/*
	per me shtu new page
	
	<h1>Page 1</h1>
	<div class="page-break"></div>
	<h1>Page 2</h1>

	*/

	.page-break {
	    page-break-after: always;
	}
</style>


</head>
<body>
			<h3>Titulli: {{$data->titulli}}</h3>
			<h3>Pershkrimi: {{$data->pershkrimi}}</h3>
			<h3>
			Akredituar:    
			@if($data->akredituar == 1)
                PO
            @else
                JO
            @endif
          </h3>
</body>
</html>



	
