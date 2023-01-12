const icon = "<? =$directoy ?>";

function insertImage(){
    
}

fetch("root/assets/logo",{
method: "POST",
})
.then(response => response.text())
.then(data => {
    let contentType = response.headers.get('content-type');
    if (!contentType || !contentType.includes('root/assets/logo')){
        
    }
});

