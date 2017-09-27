/*	
	************************

	************************
*/

//Programado por Emmanuel GalvÃĄn de GurÃšRojo para Focus On Services
var grMap	=	function(){
	
	this.paises		=	null;
	this.marcadores	=	null;
	this.tit		=	null;
	this.moving		=	false;
	this.dirLevel	=	'';
	
	this.xData		=	{};
	
	this.iniciar	=	function(){
		
		if(document.getElementById('mpc_gr').getElementsByClassName){
			this.paises		=	document.getElementById('mpc_gr').getElementsByClassName('pais');			
			this.tit		=	document.getElementById('mpc_gr').getElementsByClassName('titulo')[0];
		} else {
			this.paises		=	_getElementsByClassName(document.getElementById('mpc_gr'), 'pais');			
			this.tit		=	_getElementsByClassName(document.getElementById('mpc_gr'), 'titulo')[0];
		}
		this.marcadores	=	document.getElementById('mpc_gr').getElementsByTagName('a');
		
		var that		=	this;
		
		for(var i=0;i<this.paises.length;i++){

			var cpa			=	this.paises[i];
			cpa.className	=	'pais '+cpa.getAttribute('data-pais').toString();
			cpa.id			=	'mapa_gururojo_pais_'+cpa.getAttribute('data-pais');
			cpa.style.zIndex=	'20';

		}
		
		
		
		for(var z=0;z<this.marcadores.length;z++){
			
			var cma			=	this.marcadores[z];
			cma.className	=	cma.className+' '+cma.getAttribute('data-pais');
			
			cma.onmouseover	=	function(){
				
				var xyctar			=	document.getElementById('mapa_gururojo_pais_'+this.getAttribute('data-pais'));
				xyctar.className	=	'pais '+this.getAttribute('data-pais')+' arriba';
				xyctar.style.zIndex	=	'21';
				
				var datum	=	eval('that.xData.'+this.getAttribute('data-pais'));

				that.tit.firstChild.childNodes[0].src	=	that.dirLevel + 'img/mapa/banderas/'+datum[2];
				that.tit.firstChild.childNodes[1].innerHTML	=	datum[0];
				that.tit.firstChild.childNodes[2].innerHTML	=	datum[1];
				that.tit.firstChild.childNodes[3].innerHTML	=	datum[3];
				
				that.tit.style.top	=	this.offsetTop - that.tit.scrollHeight - 3 + 'px';
				that.tit.style.left	=	this.offsetLeft - (that.tit.scrollWidth/2) + (this.scrollWidth/2) + 'px';
				
				that.tit.className	=	'titulo arriba';
				that.moving			=	true;
				setTimeout("mapi.moving=false",500);
				
			}
			
			cma.onmouseout	=	function(){
				
				var nectar			=	'mapa_gururojo_pais_'+this.getAttribute('data-pais');
				var xyctar			=	document.getElementById(nectar);				
				xyctar.className	=	'pais '+this.getAttribute('data-pais');
				setTimeout("document.getElementById('"+nectar+"').style.zIndex='20'",1000);
				setTimeout("if(!mapi.moving){mapi.tit.style.top='-2000px';mapi.tit.style.left='-2000px'}",500);
				that.tit.className	=	'titulo';
				
			}
			
		}
		
		
	}
	
	
}