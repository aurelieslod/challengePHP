

$(document).ready(function(){
  var colorTitle = $("#colorTitle");
      colorNavbar = $("#colorNavbar");
      colorUrl = $("#colorUrl");
      colorButton = $("#colorButton");
      tester = $("#tester");
      police = $("#police");


      btnIndex = $('#btnIndex');
      btnRepertory = $('#btnRepertory');
      btnAbout = $('#btnAbout');
      btnContact = $('#btnContact');
      btnMessage = $('#btnMessage');
      btnModif = $('#btnModif');

tester.click(function(){
  //  alert(police.val());
  //Couleur des titres
  $("h1, h2, h3, h4").css({
    color : colorTitle.val()
  });
  //Couleur de la navbar
  $(".navbar-inverse").css({
    backgroundColor : colorNavbar.val()
  });

  //Couleur des liens
  $(".navbar-inverse .navbar-nav li a").css({
    color : colorUrl.val()
  });
  $(".navbar-inverse .navbar-brand").css({
    color : colorUrl.val()
  });
  $(".btn-default").css({
    color : colorUrl.val()
  });
  //Couleur des boutons
  $(".btn-default").css({
    backgroundColor : colorButton.val()
  });

  $("h1, h2, h3, h4").css({
    fontFamily : police.val()
  });


});


btnRepertory.click(function(){
  $('#incHeader, #incIndex, #incAbout, #incContact, #modifRepertory').css({
    display : 'none'
  });
  $('#incRepertory').css({
    display : 'block'
  })
})

btnIndex.click(function(){
  $('#incRepertory, #incAbout, #incContact, #modifRepertory').css({
    display : 'none'
  });
  $('#incHeader, #incIndex').css({
    display : 'block'
  })
})

btnAbout.click(function(){
  $('#incHeader, #incIndex, #incRepertory, #incContact, #modifRepertory').css({
    display : 'none'
  });
  $('#incAbout').css({
    display : 'block'
  })
})

btnContact.click(function(){
  $('#incHeader, #incIndex, #incAbout, #incRepertory, #modifRepertory').css({
    display : 'none'
  });
  $('#incContact').css({
    display : 'block'
  })
})

btnMessage.click(function(){
  $('#incHeader, #incIndex, #incAbout, #incRepertory, #incContact, #modifRepertory').css({
    display : 'none'
  });
  $('#formMessage').css({
    display : 'block'
  })
})

btnModif.click(function(){
  $('#incHeader, #incIndex, #incAbout, #incRepertory, #incContact, #formMessage').css({
    display : 'none'
  });
  $('#modifRepertory').css({
    display : 'block'
  })
})



});
  //alert($colorTitle);
