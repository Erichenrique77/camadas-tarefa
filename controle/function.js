$(document).ready(function(){
    //monitorar clique

    $('.btn-send').click(function(e){
        e.preventDefault()

        let dados = $('#form').serialize()

        $('#retorno').empty()

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../modelo/retorno.php',
            success: function(dados){
                $('#retorno').append(`
                
                <div class="col-12 col-sm-8 col-md-6">
                <div class="alert-primary">
                    <h1>
                        ${dados.mensagem}
                    </h1>
                </div>
    
                <img src="../img/${dados.tipo}" class="img-fluid">
            </div>
                
                `)


            }
        })
    })
})