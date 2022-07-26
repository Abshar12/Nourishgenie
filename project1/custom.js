let auth_token;    
$(document).ready(function(){
    $.ajax({
        type: 'get',
        url: 'https://www.universal-tutorial.com/api/getaccesstoken',
        success: function(data){
            auth_token = data.auth_token
            getCountry(data.auth_token);
        },
        error: function(error){
            console.log(error);
        },
        headers: {
            "Accept": "application/json",
            "api-token": "ytwcvYngRCiW9bDnfKQEni0ymvKcljrl_s-OGAzlJV46ZSic51Ea6IXwT-vlUYhN7D0",
            "user-email": "abshar.abshar3726@gmail.com"
        }
    })
    $('#country').change(function(){
        getState();
        getCity();
    })
    $('#state').change(function(){
        getCity();
    })
})
function getCountry(auth_token){
    $.ajax({
        type: 'get',
        url: 'https://www.universal-tutorial.com/api/countries/',
        success: function(data){
            
            data.forEach(element => {
                $('#country').append('<option value="'+element.country_name+'">'+element.country_name+'</option>');
            });
            //getState(auth_token);
        },
        error: function(error){
            console.log(error);
        },
        headers: {
            "Authorization": "Bearer " + auth_token,
            "Accept": "application/json"
        }
    })
}
    function getState(){
        let country_name = $('#country').val();
    $.ajax({
        type: 'get',
        url: 'https://www.universal-tutorial.com/api/states/' + country_name,
        success: function(data){
            $('#state').empty();
            $('#state').append("<option selected>Choose State</option>");
            data.forEach(element => {
                $('#state').append('<option value="'+element.state_name+'">'+element.state_name+'</option>');
            });
            //getCity(auth_token);
        },
        error: function(error){
            console.log(error);
        },
        headers: {
            "Authorization": "Bearer " + auth_token,
            "Accept": "application/json"
        }
    })
}
function getCity(){
        let state_name = $('#state').val();
    $.ajax({
        type: 'get',
        url: 'https://www.universal-tutorial.com/api/cities/' + state_name,
        success: function(data){
            $('#city').empty();
            $('#city').append("<option selected>Choose city</option>");
            data.forEach(element => {
                $('#city').append('<option value="'+element.city_name+'">'+element.city_name+'</option>');
            });
            //console.log('ajax');
        },
        error: function(error){
            console.log(error);
        },
        headers: {
            "Authorization": "Bearer " + auth_token,
            "Accept": "application/json"
        }
    })
}
    
