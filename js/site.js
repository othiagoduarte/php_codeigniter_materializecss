$(document).ready(function()
{

	AddClick();

});



function AddClick()
{

	var btn=$('img');


	btn.each(function()
	{
		$(this).unbind();
		$(this).bind('click',function()
		{

			 $('#modalTeste').openModal();
			 ChangeImages();

		});

	});





}

function ChangeImages()
{

	var imagemPrincipal=$("#imagemModalPrincipal");
	var imagemBanner1=$("#imagemModal1");
	var imagemBanner2=$("#imagemModal2");
	var imagemBanner3=$("#imagemModal3");
	var oldImage='';



	imagemPrincipal.unbind();

	imagemBanner1.unbind('click');
	imagemBanner1.bind('click',function()
	{
		oldImage=imagemBanner1.attr('src')

		imagemBanner1.attr('src',imagemPrincipal.attr('src'));
		imagemPrincipal.attr('src',oldImage);

	});

	imagemBanner2.unbind('click');
	imagemBanner2.bind('click',function()
	{
		oldImage=imagemBanner2.attr('src')

		imagemBanner2.attr('src',imagemPrincipal.attr('src'));
		imagemPrincipal.attr('src',oldImage);

	});

	imagemBanner3.unbind('click');
	imagemBanner3.bind('click',function()
	{
		oldImage=imagemBanner3.attr('src');

		imagemBanner3.attr('src',imagemPrincipal.attr('src'));
		imagemPrincipal.attr('src',oldImage);

	});


}