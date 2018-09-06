  $(".oclusal2").click(function(){
    var cor = $(this).css('background-color');
    if(cor == 'rgb(17, 153, 244)'){
      $(this).css('background-color','transparent');
      $(this).children('.variavel').prop('checked', false);
      $('.dente'+$(this).children('.variavel').val()).css('filter','blur(1px)');
      $('.dente'+$(this).children('.variavel').val()).css('pointer-events','none');
    } else{
      $(this).css('background-color','#1199f4');
      $(this).children('.variavel').prop('checked', true);
      $('.dente'+$(this).children('.variavel').val()).css('filter','blur(0px)');
      $('.dente'+$(this).children('.variavel').val()).css('pointer-events','auto');
    }
  });

  $( "#local" ).change(function() {
    var local = $("#local").val();
    if(local == "radio-ufrgs"){
      $(".graduacao-invisible").css("display","none");
      $(".extensao-invisible").css("display","none");
      $(".pos-invisible").css("display","none");
      $(".posgrad-invisible").css("display", "none");
      $(".radio-ufrgs-invisible").css("display","block");
      $("#local6").prop('required',false);
      $("#local7").prop('required',false);
      $("#extensao").prop('required',false);
      $("#local4").prop('required',false);
      $("#local3").prop('required',false);
      $("#local2").prop('required',true);
    } else if(local == "graduacao"){
      $(".radio-ufrgs-invisible").css("display","none");
      $(".extensao-invisible").css("display","none");
      $(".pos-invisible").css("display","none");
      $(".radioposgrad-invisible").css("display","none");
      $(".posgrad-invisible").css("display", "none");
      $(".graduacao-invisible").css("display","block");
      $("#local6").prop('required',false);
      $("#local7").prop('required',false);
      $("#local3").prop('required',false);
      $("#extensao").prop('required',false);
      $("#local2").prop('required',false);
      $("#local3").prop('required',false);
      $("#local4").prop('required',true);
    } else if(local == "extensao"){
      $(".radio-ufrgs-invisible").css("display","none");
      $(".pos-invisible").css("display","none");
      $(".graduacao-invisible").css("display","none");
      $(".radioposgrad-invisible").css("display","none");
      $(".posgrad-invisible").css("display", "none");
      $(".extensao-invisible").css("display","block");
      $("#local6").prop('required',false);
      $("#local7").prop('required',false);
      $("#local3").prop('required',false);
      $("#local4").prop('required',false);
      $("#local2").prop('required',false);
      $("#local3").prop('required',false);
      $("#extensao").prop('required',true);
    } else if(local == "pos"){
      $(".radio-ufrgs-invisible").css("display","none");
      $(".extensao-invisible").css("display","none");
      $(".graduacao-invisible").css("display","none");
      $(".radioposgrad-invisible").css("display","none");
      $(".pos-invisible").css("display","block");
      $(".posgrad-invisible").css("display", "block");
      $("#local3").prop('required',false);
      $("#extensao").prop('required',false);
      $("#local4").prop('required',false);
      $("#local2").prop('required',false);
      $("#local3").prop('required',false);
      $("#local6").prop('required',true);
      $("#local7").prop('required',true);
    } else{
      $(".radioposgrad-invisible").css("display","none");
      $(".graduacao-invisible").css("display","none");
      $(".radio-ufrgs-invisible").css("display","none");
      $(".extensao-invisible").css("display","none");
      $(".pos-invisible").css("display","none");
      $(".posgrad-invisible").css("display", "none");
      $("#local6").prop('required',false);
      $("#local7").prop('required',false);
      $("#local3").prop('required',false);
      $("#extensao").prop('required',false);
      $("#local4").prop('required',false);
      $("#local2").prop('required',false);
    }
  });

  $( "#local2" ).change(function() {
    var local = $("#local2").val();
    if(local == "radio-pos-grad"){
      $(".radioposgrad-invisible").css("display","block");
      $("#local3").prop('required',true);
    } else{
      $(".radioposgrad-invisible").css("display","none");
      $("#local3").prop('required',false);
    }
  });

  $( "#tipo-exame1" ).change(function() {
    var tipo = $("#tipo-exame1").val();
    if(tipo == "intrabucal"){
      $(".extrabucal-invisible").css("display","none");
      $(".tomografia-invisible").css("display","none");
      $(".ressonancia-invisible").css("display","none");
      $(".outraextra-invisible").css("display","none");
      $(".outraintra-invisible").css("display","none");
      $(".intrabucal-invisible").css("display","block");
      $("#ressonancia").prop('required',false);
      $("#tomografia").prop('required',false);
      $("#extrabucal").prop('required',false);
      $("#tipo-exame2").prop('required',true);
    } else if(tipo == "extrabucal"){
      $(".intrabucal-invisible").css("display","none");
      $(".tomografia-invisible").css("display","none");
      $(".ressonancia-invisible").css("display","none");
      $(".interproximal-invisible").css("display","none");
      $(".oclusal-invisible").css("display","none");
      $(".periapical-invisible").css("display","none");
      $(".outraintra-invisible").css("display","none");
      $(".outraextra-invisible").css("display","none");
      $(".extrabucal-invisible").css("display","block");
      $("#tipo-exame2").prop('required',false);
      $("#ressonancia").prop('required',false);
      $("#tomografia").prop('required',false);
      $("#extrabucal").prop('required',true);
    } else if(tipo == "tomografia"){
      $(".extrabucal-invisible").css("display","none");
      $(".intrabucal-invisible").css("display","none");
      $(".ressonancia-invisible").css("display","none");
      $(".interproximal-invisible").css("display","none");
      $(".oclusal-invisible").css("display","none");
      $(".periapical-invisible").css("display","none");
      $(".tomografia-invisible").css("display","block");
      $(".outraextra-invisible").css("display","none");
      $(".outraintra-invisible").css("display","none");
      $("#tipo-exame2").prop('required',false);
      $("#ressonancia").prop('required',false);
      $("#extrabucal").prop('required',false);
      $("#tomografia").prop('required',true);
    } else if(tipo == "ressonancia"){
      $(".extrabucal-invisible").css("display","none");
      $(".intrabucal-invisible").css("display","none");
      $(".tomografia-invisible").css("display","none");
      $(".interproximal-invisible").css("display","none");
      $(".oclusal-invisible").css("display","none");
      $(".periapical-invisible").css("display","none");
      $(".ressonancia-invisible").css("display","block");
      $(".outraextra-invisible").css("display","none");
      $(".outraintra-invisible").css("display","none");
      $("#tipo-exame2").prop('required',false);
      $("#tomografia").prop('required',false);
      $("#extrabucal").prop('required',false);
      $("#ressonancia").prop('required',true);
    } else {
      $(".intrabucal-invisible").css("display","none");
      $(".extrabucal-invisible").css("display","none");
      $(".tomografia-invisible").css("display","none");
      $(".ressonancia-invisible").css("display","none");
      $(".interproximal-invisible").css("display","none");
      $(".oclusal-invisible").css("display","none");
      $(".periapical-invisible").css("display","none");
      $(".outraextra-invisible").css("display","none");
      $(".outraintra-invisible").css("display","none");
      $("#tipo-exame7, #tipo-exame6, #tipo-exame5, #tipo-exame4, #tipo-exame3, #tipo-exame2, #ressonancia, #tomografia, #extrabucal").prop('required',false);
    }
  });

  $( "#tipo-exame2" ).change(function() {
    var tipo = $("#tipo-exame2").val();
    if(tipo == "periapical-paralelismo" || tipo == "periapical-bissetriz"){
      $(".interproximal-invisible").css("display","none");
      $(".oclusal-invisible").css("display","none");
      $(".outraintra-invisible").css("display","none");
      $(".periapical-invisible").css("display","block");
      $("#tipo-exame7").prop('required',false);
      $("#tipo-exame6").prop('required',false);
      $("#tipo-exame5").prop('required',false);
      $("#tipo-exame4").prop('required',false);
      $("#tipo-exame3").prop('required',true);
    } else if(tipo == "interproximal"){
      $(".periapical-invisible").css("display","none");
      $(".oclusal-invisible").css("display","none");
      $(".outraintra-invisible").css("display","none");
      $(".interproximal-invisible").css("display","block");
      $("#tipo-exame7").prop('required',false);
      $("#tipo-exame6").prop('required',false);
      $("#tipo-exame5").prop('required',false);
      $("#tipo-exame3").prop('required',false);
      $("#tipo-exame4").prop('required',true);
    } else if(tipo == "oclusal"){
      $(".interproximal-invisible").css("display","none");
      $(".periapical-invisible").css("display","none");
      $(".outraintra-invisible").css("display","none");
      $(".oclusal-invisible").css("display","block");
      $("#tipo-exame7").prop('required',false);
      $("#tipo-exame6").prop('required',false);
      $("#tipo-exame4").prop('required',false);
      $("#tipo-exame3").prop('required',false);
      $("#tipo-exame5").prop('required',true);
    } else if(tipo == "outra"){
      $(".interproximal-invisible").css("display","none");
      $(".periapical-invisible").css("display","none");
      $(".oclusal-invisible").css("display","none");
      $(".outraintra-invisible").css("display","block");
      $("#tipo-exame7").prop('required',false);
      $("#tipo-exame5").prop('required',false);
      $("#tipo-exame4").prop('required',false);
      $("#tipo-exame3").prop('required',false);
      $("#tipo-exame6").prop('required',true);
    } else{
      $(".interproximal-invisible").css("display","none");
      $(".oclusal-invisible").css("display","none");
      $(".periapical-invisible").css("display","none");
      $(".outraintra-invisible").css("display","none");
      $("#tipo-exame7").prop('required',false);
      $("#tipo-exame6").prop('required',false);
      $("#tipo-exame5").prop('required',false);
      $("#tipo-exame4").prop('required',false);
      $("#tipo-exame3").prop('required',false);
    }
  });

  $( "#extrabucal" ).change(function() {
    var tipo = $("#extrabucal").val();
    if(tipo == "outra"){
      $(".outraextra-invisible").css("display","block");
      $("#tipo-exame7").prop('required',true);
    } else{
      $(".outraextra-invisible").css("display","none");
      $("#tipo-exame7").prop('required',false);
    }
  });

  $( "#denticao" ).change(function() {
    var dent = $("#denticao").val();
    if(dent == "permanente"){
      $(".denticao").css("display","block");
      $(".permanente").css("display","block");
      $(".decidua").css("display", "none");
      $(".deciduo").css("display", "none");
    } else if(dent == "decidua"){
      $(".denticao").css("display","block");
      $(".decidua").css("display","block");
      $(".deciduo").css("display", "block");
      $(".permanente").css("display","block");
    } else if(dent == "mista"){
      $(".denticao").css("display","block");
      $(".permanente").css("display","block");
      $(".decidua").css("display","block");
      $(".deciduo").css("display", "block");
    } else{
      $(".denticao").css("display","none");
      $(".permanente").css("display","none");
      $(".decidua").css("display","none");
      $(".deciduo").css("display", "none");
    }
  });

  $("#add-novo-exame").click(function(){
    var id = new Date().valueOf();
    $("#add-exames").append('<div class="form-group row" id="'+ id +'"><label for="prontuario" class="col-md-2 col-form-label"></label><div class="col-md-3"><input class="form-control" type="date" value="" id="data-exame'+id+'" name="data-exame[]"></div><div class="col-md-3"><input class="form-control" type="text" placeholder="Nº do exame" id="num-exame'+id+'" name="num-exame[]"></div><div class="col-md-3"><input class="form-control" type="file" value="" id="exame'+id+'" name="exame[]"></div><div class="col-md-1"><button class="btn btn-danger btn-block" type="button" onclick="excluiexame('+id+');">-</button></div></div>');
  });

  function marcar(source){
    if(source == "dentespresentes") {
      
      if(document.getElementById('marcar_'+source).checked) {
        checkboxes = document.getElementsByName(source+'[]');
        for(var i=0, n=checkboxes.length;i<n;i++) {
          if($("#denticao").val() == "permanente" && Number((checkboxes[i].value).substr(0, 2)) <= 48){
            checkboxes[i].checked = source+[].checked;
            $(".pdente"+(checkboxes[i].value).substr(0, 2)+" > ."+source).css('background-color','#1199f4');
          } else if ($("#denticao").val() != "permanente"){
            checkboxes[i].checked = source+[].checked;
            $(".pdente"+(checkboxes[i].value).substr(0, 2)+" > ."+source).css('background-color','#1199f4');
          }
          $.each($("input[name='dentespresentes[]']:checked"), function(){
            $('.dente'+$(this).val()).css('filter','blur(0px)');
            $('.dente'+$(this).val()).css('pointer-events','auto');
          });
        }
      } else{
        checkboxes = document.getElementsByName(source+'[]');
        for(var i=0, n=checkboxes.length;i<n;i++) {
          checkboxes[i].checked = false;
        }
        $(".oclusal2").css('background-color','transparent');
        $.each($("input[name='dentespresentes[]']:checked"), function(){
          $('.dente'+$(this).val()).css('filter','blur(0px)');
          $('.dente'+$(this).val()).css('pointer-events','auto');
        });

      }
    } else{
      if(document.getElementById('marcar_'+source).checked) {
        checkboxes = document.getElementsByName(source+'[]');
        for(var i=0, n=checkboxes.length;i<n;i++) {
          if($("#denticao").val() == "permanente" && Number((checkboxes[i].value).substr(0, 2)) <= 48){
            checkboxes[i].checked = source+[].checked;
            $(".dente"+(checkboxes[i].value).substr(0, 2)+" > ."+source).css('background-color','#1199f4');
          } else if ($("#denticao").val() != "permanente"){
            checkboxes[i].checked = source+[].checked;
            $(".dente"+(checkboxes[i].value).substr(0, 2)+" > ."+source).css('background-color','#1199f4');
          }
        }
      } else{
        checkboxes = document.getElementsByName(source+'[]');
        for(var i=0, n=checkboxes.length;i<n;i++) {
          checkboxes[i].checked = false;
        }
        if(source == 'dentesausentes'){
          $(".oclusal2").css('background-color','transparent');
        } else{
          $("."+source).css('background-color','transparent');
        }
      }
    }
  }

  $("input[name='regiao_avaliada[]']").click(function (){
    var regiao = [];
    var regiao2 = ['coroa','raiz','crista','periapice','tecido_osseo','tecido_mole','atm']
    $.each($("input[name='regiao_avaliada[]']:checked"), function(){            
      regiao.push($(this).val());
    });
    var n = 0;
    $.each(regiao2, function(){           
      var val = jQuery.inArray(regiao2[n], regiao);
      if(val == -1){
        $('#a'+regiao2[n]).empty();
      } else{
        if (($('#a'+regiao2[n]).html()).length < 200){
          $('#a'+regiao2[n]).load('alteracoes'+regiao2[n]+'.php');
        }
        alteracoes(regiao2[n]);
      }
      n++;
    });
    var dent = $("#denticao").val();
    
    setTimeout(function (){
      if(dent == "permanente"){
        $(".denticao").css("display","block");
        $(".permanente").css("display","block");
        $(".decidua").css("display", "none");
        $(".deciduo").css("display", "none");
      } else if(dent == "decidua"){
        $(".denticao").css("display","block");
        $(".decidua").css("display","block");
        $(".deciduo").css("display", "block");
        $(".permanente").css("display","block");
      } else if(dent == "mista"){
        $(".denticao").css("display","block");
        $(".permanente").css("display","block");
        $(".decidua").css("display","block");
        $(".deciduo").css("display", "block");
      }

      $.each($("input[name='dentespresentes[]']:checked"), function(){
        $('.dente'+$(this).val()).css('filter','blur(0px)');
        $('.dente'+$(this).val()).css('pointer-events','auto');
      });

    }, 1000);
    
  });


  function alteracoes(id){
    var alte = $('input[name=alteracoes-'+id+']:checked').val();
    if(alte == "Com alterações"){
      $("#alt_"+id).css("display","block");
    } else{
      $("#alt_"+id).css("display","none");
    }
  }

  function excluiexame(id){
    $("#"+id).remove();
  }


  $("#imgInput").change(function(){
    $(".modalzin").css("display","block");
    $("#view-img").css("display","block");
    if (this.files && this.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#view-img').attr('src', e.target.result);
        $('.modalzito-content').attr('src', e.target.result);

      }
      reader.readAsDataURL(this.files[0]);
    }
  });

  function ampliar(){
    $(".modalzito").css("display","block");
  }

  function fechamodal(){
    $(".modalzito").css("display","none");
  }

  function marcacampo(e){
    var cor = $(e).children('.variavel').prop('checked')
    if(cor == true){
      $(e).css('background-color','transparent');
      $(e).children('.variavel').prop('checked', false);
    }
    if(cor == false){
      $(e).css('background-color','#1199f4');
      $(e).children('.variavel').prop('checked', true);
    }
    e.preventDefault();
  }

  $( "#perdaosseageneralizada" ).change(function() {
    var perda = $("#perdaosseageneralizada").val();
    alert(perda);
    if(perda == "horizontal" || perda == "vertical"){
      $(".perdag-invisible").css("display","block");
    } else {
      $(".perdag-invisible").css("display","none");
    }
  });

  $( "#parestesiatm" ).change(function() {
    var tipo = $("#parestesiatm").val();
    if(tipo == "Sim"){
      $(".parestesiatm-invisible").css("display","block");
    } else{
      $(".parestesiatm-invisible").css("display","none");
    }
  });

  $( "#nodulotm" ).change(function() {
    var tipo = $("#nodulotm").val();
    if(tipo == "Sim - móvel" || tipo == "Sim - fixo"){
      $(".nodulotm-invisible").css("display","block");
    } else{
      $(".nodulotm-invisible").css("display","none");
    }
  });

  $( "#localizacaotm" ).change(function() {
    var tipo = $("#localizacaotm").val();
    if(tipo == "Abaixo do ângulo da mandíbula"){
      $(".localizacaotm-invisible").css("display","block");
    } else{
      $(".localizacaotm-invisible").css("display","none");
    }
  });

  $( "#localizacaoto" ).change(function() {
    var tipo = $("#localizacaoto").val();
    if(tipo == "Outra"){
      $(".outralocalizacaoto-invisible").css("display","block");
    } else{
      $(".outralocalizacaoto-invisible").css("display","none");
    }
  });

  $( "#centro_lesaoto" ).change(function() {
    var tipo = $("#centro_lesaoto").val();
    if(tipo == "Outro"){
      $(".outrocentroto-invisible").css("display","block");
    } else{
      $(".outrocentroto-invisible").css("display","none");
    }
  });

  $( "#maior_diametroto" ).change(function() {
    var tipo = $("#maior_diametroto").val();
    if(tipo == "Maior que 3cm"){
      $(".maiordiametroto-invisible").css("display","block");
    } else{
      $(".maiordiametroto-invisible").css("display","none");
    }
  });

  $( "#conteudo_aspectoto" ).change(function() {
    var tipo = $("#conteudo_aspectoto").val();
    if(tipo == "Radiolúcido - multilocular"){
      $(".conteudoaspectoto-invisible").css("display","block");
    } else{
      $(".conteudoaspectoto-invisible").css("display","none");
    }
  });

  $( "#contem_dentesto" ).change(function() {
    var tipo = $("#contem_dentesto").val();
    if(tipo == "Sim - um" || tipo == "Sim - dois ou mais"){
      $(".contemdentesto-invisible").css("display","block");
    } else{
      $(".contemdentesto-invisible").css("display","none");
    }
  });

  $( ".target1" ).keypress(function( event ) {   
    if ( event.which == 13 ) {
      alert('enter pressionado');
    }
  });