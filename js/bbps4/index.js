function getUpdateInfoTable(data){
    var tbody = document.getElementById("update-info");

    for(i = 0; i < data.length; i++){
        var tr = document.createElement('tr');
        for(j = 0; j < data[0].length; j++){
            var td = document.createElement('td');
            td.innerHTML = data[i][j];
            tr.appendChild(td);
        }
        tbody.appendChild(tr);
    }
}

function getCSV(){
    var req = new XMLHttpRequest();
    req.open('get', '././history/history.csv', true);
    req.send(null);
    
    req.onload = function(){
	    convertCSVtoArray(req.responseText); // 渡されるのは読み込んだCSVデータ
    }
}

function convertCSVtoArray(str){
    var result = [];
    var tmp = str.split("\n");
 
    for(var i=0;i<tmp.length;++i){
        result[i] = tmp[i].split(',');
    }
    this.getUpdateInfoTable(result);
}

window.onload = function(){
    this.getCSV();
};

