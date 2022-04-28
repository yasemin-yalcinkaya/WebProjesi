var i=0;
var images=['img/amasya1.jpg','img/amasya6.jpg','img/amasya7.jpg'];

var duration =2000;

function slideImg() 
{
	document.slider.src=images[i];
	if (i<images.length-1)
	 {
		i++;
     }
     else
     {
     	i=0;
     }

   setTimeout("slideImg()",duration);
}

window.onload=slideImg;
