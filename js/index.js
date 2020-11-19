function mensagem (type){
    switch(type){
        case 'sucesso':
            swal("Salvo com sucesso", "success", {
                title: "Salvo com sucesso!",
                text: "",
                icon: "success",
            }); 
        break;
        case 'erro':
            swal("Salvo com sucesso", "success", {
                title: "Erro ao salvar!",
                text: "",
                icon: "error",
            }); 
        break;
    }
}

function  valida(status){
    status == 200 ? mensagem('sucesso') : mensagem('erro');
}

function save(){
    axios.post('/').then(function(response){
        response.status == 200 ? valida(response.status): valida(response.status);
    }).catch(function(error){

    });
}