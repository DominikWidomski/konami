<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Konami Code</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<script>

		(function(){
			var input = [];
			var code = [38,38,40,40,37,39,37,39,66,65];

			function korn() {
			    var d = document,
			        j = d.getElementById('__cornify_nodes'),
			        k = null;
			    var files = ['http://cornify.com/js/cornify.js', 'http://cornify.com/js/cornify_run.js'];
			    if (j) {
			        cornify_add();
			    } else {
			        k = d.createElement('div');
			        k.id = '__cornify_nodes';
			        d.getElementsByTagName('body')[0].appendChild(k);
			        for (var l = 0; l < files.length; l++) {
			            j = d.createElement('script');
			            j.src = files[l];
			            k.appendChild(j);
			        }
			    }
			}

			window.addEventListener('keydown', function(e) {
				input.push(e.keyCode);

				if(input.length > code.length) {
					input.shift();
				}

				var inputString = input.join('');
				var codeString = code.join('');

				console.log(inputString + ' / ' + input.length + ' / ' + code.length);
				if(inputString == codeString) {
					if( typeof korn == 'function' ) {
						korn.call();
					}
				}

			})
		})();

	</script>

</body>
</html>