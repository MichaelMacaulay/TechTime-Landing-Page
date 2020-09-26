function submit (){

    var sheetName = config.sheetName;
    var sheetId = config.sheetId;
    var apiKey = config.apiKey;
    // var sheetName = "TechTimeEmailList" //enter the sheet name
    // var sheetId = "1IjTP1o3k2AY1hGkU6_YsKTQHFCcEzxSo-iS1UNkwDCk" //enter the sheet id
    // var apiKey = "Pe5j22JLhE4gR2OsQIKYC7XFZSYIP_eAjFHna6LdJrcSEdHIJUNDjk8WeXU"
    document.getElementById("submit").value = "Loading..."
    var email = document.getElementById("email").value
        var name = document.getElementById("name").value
        fetch("https://api.sheetson.com/v2/sheets/"+sheetName,{
        method:"POST",
        headers:{
            "Authorization": "Bearer "+apiKey,
            "X-Spreadsheet-Id": sheetId,
            "Content-Type":"application/json"
        },
        body: JSON.stringify({name,email})
        }).then(result=>{
        //console.log(result)
        document.getElementById("submit").value = "Thank You!"
        })
    }