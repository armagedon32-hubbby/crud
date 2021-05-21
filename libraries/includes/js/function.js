$('#onsubmit').click(() => {
const data = {
    'info1':nme.value,
    'info2':em.value,
     insertMethod:true,
     table: 'tbcrud'
    
} 
validateUser(data);

});


 function validateUser(data){
    if(!data.info1 || !data.info2){
        alert("Empty Field");
        return false;
    }else{
        insert_user(data);
    }
}
const insert_user = async data=>{
    const response = await $.post(state.app + state.Helpers + '/Userhelpers.php ', data);
    console.log(response);
}

