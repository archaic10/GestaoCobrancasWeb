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
            swal("Erro ao salvar!", "error  ", {
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
    var data = {
        comando:"save",
    }
    axios.post('/',data).then(function(response){
        console.log(response.data);
        response.status == 200 ? valida(response.status) : valida(response.status);
    }).catch(function(error){

    });
}