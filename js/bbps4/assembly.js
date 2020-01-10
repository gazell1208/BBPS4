window.onload = function(){
    this.getLegResistance()
    .then(data => {
        document.getElementById("legLoading").innerHTML = data;
        this.setAllWeight();
        this.setMachineWeight();
        this.setAssaultWeight();
        this.setHeavyWeight();
        this.setShortWeight();
        this.setSuportWeight();
        this.setTotalWeight();
    })
    .catch(err => {
        console.log(err);
    })
};

window.onchange = function(){
    this.getLegResistance()
    .then(data => {
        document.getElementById("legLoading").innerHTML = data;
        this.setAllWeight();
        this.setMachineWeight();
        this.setAssaultWeight();
        this.setHeavyWeight();
        this.setShortWeight();
        this.setSuportWeight();
        this.setTotalWeight();
    })
    .catch(err => {
        console.log(err);
    })
}

/**
 * すべての機体・武器各種個別重量の設定
 */
function setAllWeight(){
    document.getElementById("headWeight").innerHTML = this.calcStrengthWeight(document.getElementById("headName").value, document.getElementById("headStrength").value);
    document.getElementById("bodyWeight").innerHTML = this.calcStrengthWeight(document.getElementById("bodyName").value, document.getElementById("bodyStrength").value);
    document.getElementById("armWeight").innerHTML = this.calcStrengthWeight(document.getElementById("armName").value, document.getElementById("armStrength").value);
    document.getElementById("legWeight").innerHTML = this.calcStrengthWeight(document.getElementById("legName").value, document.getElementById("legStrength").value);

    document.getElementById("assaultMainWeight").innerHTML = this.calcStrengthWeight(document.getElementById("assaultMainName").value, document.getElementById("assaultMainStrength").value);
    document.getElementById("assaultSubWeight").innerHTML = this.calcStrengthWeight(document.getElementById("assaultSubName").value, document.getElementById("assaultSubStrength").value);
    document.getElementById("assaultSupWeight").innerHTML = this.calcStrengthWeight(document.getElementById("assaultSupName").value, document.getElementById("assaultSupStrength").value);
    document.getElementById("assaultSpWeight").innerHTML = this.calcStrengthWeight(document.getElementById("assaultSpName").value, document.getElementById("assaultSpStrength").value);
    
    document.getElementById("heavyMainWeight").innerHTML = this.calcStrengthWeight(document.getElementById("heavyMainName").value, document.getElementById("heavyMainStrength").value);
    document.getElementById("heavySubWeight").innerHTML = this.calcStrengthWeight(document.getElementById("heavySubName").value, document.getElementById("heavySubStrength").value);
    document.getElementById("heavySupWeight").innerHTML = this.calcStrengthWeight(document.getElementById("heavySupName").value, document.getElementById("heavySupStrength").value);
    document.getElementById("heavySpWeight").innerHTML = this.calcStrengthWeight(document.getElementById("heavySpName").value, document.getElementById("heavySpStrength").value);
    
    document.getElementById("shortMainWeight").innerHTML = this.calcStrengthWeight(document.getElementById("shortMainName").value, document.getElementById("shortMainStrength").value);
    document.getElementById("shortSubWeight").innerHTML = this.calcStrengthWeight(document.getElementById("shortSubName").value, document.getElementById("shortSubStrength").value);
    document.getElementById("shortSupWeight").innerHTML = this.calcStrengthWeight(document.getElementById("shortSupName").value, document.getElementById("shortSupStrength").value);
    document.getElementById("shortSpWeight").innerHTML = this.calcStrengthWeight(document.getElementById("shortSpName").value, document.getElementById("shortSpStrength").value);
    
    document.getElementById("suportMainWeight").innerHTML = this.calcStrengthWeight(document.getElementById("suportMainName").value, document.getElementById("suportMainStrength").value);
    document.getElementById("suportSubWeight").innerHTML = this.calcStrengthWeight(document.getElementById("suportSubName").value, document.getElementById("suportSubStrength").value);
    document.getElementById("suportSupWeight").innerHTML = this.calcStrengthWeight(document.getElementById("suportSupName").value, document.getElementById("suportSupStrength").value);
    document.getElementById("suportSpWeight").innerHTML = this.calcStrengthWeight(document.getElementById("suportSpName").value, document.getElementById("suportSpStrength").value);
}

/**
 * 機体・武器各種の個別重量の設定
 * @param {string} category 機体各部または武器種
 */
function setWeight(category){
    var weight, strength, setHtml;
    switch(category){
        case "head":
            weight = document.getElementById("headName").value;
            strength = document.getElementById("headStrength").value;
            setHtml = document.getElementById("headWeight");
            break;
        case "body":
            weight = document.getElementById("bodyName").value;
            strength = document.getElementById("bodyStrength").value;
            setHtml = document.getElementById("bodyWeight");
            break;
        case "arm":
            weight = document.getElementById("armName").value;
            strength = document.getElementById("armStrength").value;
            setHtml = document.getElementById("armWeight");
            break;
        case "leg":
            weight = document.getElementById("legName").value;
            strength = document.getElementById("legStrength").value;
            setHtml = document.getElementById("legWeight");
            break;
        case "assaultMain":
            weight = document.getElementById("assaultMainName").value;
            strength = document.getElementById("assaultMainStrength").value;
            setHtml = document.getElementById("assaultMainWeight");
            break;
        case "assaultSub":
            weight = document.getElementById("assaultSubName").value;
            strength = document.getElementById("assaultSubStrength").value;
            setHtml = document.getElementById("assaultSubWeight");
            break;
        case "assaultSup":
            weight = document.getElementById("assaultSupName").value;
            strength = document.getElementById("assaultSupStrength").value;
            setHtml = document.getElementById("assaultSupWeight");
            break;
        case "assaultSp":
            weight = document.getElementById("assaultSpName").value;
            strength = document.getElementById("assaultSpStrength").value;
            setHtml = document.getElementById("assaultSpWeight");
            break;
        case "heavyMain":
            weight = document.getElementById("heavyMainName").value;
            strength = document.getElementById("heavyMainStrength").value;
            setHtml = document.getElementById("heavyMainWeight");
            break;
        case "heavySub":
            weight = document.getElementById("heavySubName").value;
            strength = document.getElementById("heavySubStrength").value;
            setHtml = document.getElementById("heavySubWeight");
            break;
        case "heavySup":
            weight = document.getElementById("heavySupName").value;
            strength = document.getElementById("heavySupStrength").value;
            setHtml = document.getElementById("heavySupWeight");
            break;
        case "heavySp":
            weight = document.getElementById("heavySpName").value;
            strength = document.getElementById("heavySpStrength").value;
            setHtml = document.getElementById("heavySpWeight");
            break;
        case "shortMain":
            weight = document.getElementById("shortMainName").value;
            strength = document.getElementById("shortMainStrength").value;
            setHtml = document.getElementById("shortMainWeight");
            break;
        case "shortSub":
            weight = document.getElementById("shortSubName").value;
            strength = document.getElementById("shortSubStrength").value;
            setHtml = document.getElementById("shortSubWeight");
            break;
        case "shortSup":
            weight = document.getElementById("shortSupName").value;
            strength = document.getElementById("shortSupStrength").value;
            setHtml = document.getElementById("shortSupWeight");
            break;
        case "shortSp":
            weight = document.getElementById("shortSpName").value;
            strength = document.getElementById("shortSpStrength").value;
            setHtml = document.getElementById("shortSpWeight");
            break;
        case "suportMain":
            weight = document.getElementById("suportMainName").value;
            strength = document.getElementById("suportMainStrength").value;
            setHtml = document.getElementById("suportMainWeight");
            break;
        case "suportSub":
            weight = document.getElementById("suportSubName").value;
            strength = document.getElementById("suportSubStrength").value;
            setHtml = document.getElementById("suportSubWeight");
            break;
        case "suportSup":
            weight = document.getElementById("suportSupName").value;
            strength = document.getElementById("suportSupStrength").value;
            setHtml = document.getElementById("suportSupWeight");
            break;
        case "suportSp":
            weight = document.getElementById("suportSpName").value;
            strength = document.getElementById("suportSpStrength").value;
            setHtml = document.getElementById("suportSpWeight");
            break;
    }
    setHtml.innerHTML = this.calcStrengthWeight(weight, strength);

    return
}

/**
 * 機体重量合計の設定
 */
function setMachineWeight(){
    var headWeight = parseFloat(document.getElementById("headWeight").innerHTML);
    var bodyWeight = parseFloat(document.getElementById("bodyWeight").innerHTML);
    var armWeight = parseFloat(document.getElementById("armWeight").innerHTML);
    var legWeight = parseFloat(document.getElementById("legWeight").innerHTML);

    document.getElementById("machineWeight").innerHTML = headWeight + bodyWeight + armWeight + legWeight;

    return;
}

/**
 * 強襲武器重量合計の設定
 */
function setAssaultWeight(){
    var main = parseFloat(document.getElementById("assaultMainWeight").innerHTML);
    var sub = parseFloat(document.getElementById("assaultSubWeight").innerHTML);
    var sup = parseFloat(document.getElementById("assaultSupWeight").innerHTML);
    var sp = parseFloat(document.getElementById("assaultSpWeight").innerHTML);

    document.getElementById("assaultWeight").innerHTML = main + sub + sup + sp;

    return;
}

/**
 * 重火力武器重量合計の設定
 */
function setHeavyWeight(){
    var main = parseFloat(document.getElementById("heavyMainWeight").innerHTML);
    var sub = parseFloat(document.getElementById("heavySubWeight").innerHTML);
    var sup = parseFloat(document.getElementById("heavySupWeight").innerHTML);
    var sp = parseFloat(document.getElementById("heavySpWeight").innerHTML);

    document.getElementById("heavyWeight").innerHTML = main + sub + sup + sp;

    return;
}

/**
 * 遊撃武器重量合計の設定
 */
function setShortWeight(){
    var main = parseFloat(document.getElementById("shortMainWeight").innerHTML);
    var sub = parseFloat(document.getElementById("shortSubWeight").innerHTML);
    var sup = parseFloat(document.getElementById("shortSupWeight").innerHTML);
    var sp = parseFloat(document.getElementById("shortSpWeight").innerHTML);

    document.getElementById("shortWeight").innerHTML = main + sub + sup + sp;

    return;
}

function setSuportWeight(){
    var main = parseFloat(document.getElementById("suportMainWeight").innerHTML);
    var sub = parseFloat(document.getElementById("suportSubWeight").innerHTML);
    var sup = parseFloat(document.getElementById("suportSupWeight").innerHTML);
    var sp = parseFloat(document.getElementById("suportSpWeight").innerHTML);

    document.getElementById("suportWeight").innerHTML = main + sub + sup + sp;

    return;
}

/**
 * 機体・兵装合計の設定
 */
function setTotalWeight(){
    var machineWeight = parseFloat(document.getElementById("machineWeight").innerHTML);
    var legLoading = parseFloat(document.getElementById("legLoading").innerHTML);
    var chipWeight = parseFloat(document.getElementById("chipWeight").innerHTML);

    /* Assault START */
    var assaultWeight = parseFloat(document.getElementById("assaultWeight").innerHTML);
    var assaultTotalWeight = machineWeight + assaultWeight;
    document.getElementById("assaultTotalWeight").innerHTML = assaultTotalWeight;
    var assaultLegLoading = legLoading + chipWeight;
    document.getElementById("assaultLegLoading").innerHTML = assaultLegLoading;

    if(assaultTotalWeight > assaultLegLoading) {
        document.getElementById("assaultResltSuccess").style.display = "none";
        document.getElementById("assaultResltCaution").style.display = "block";
        document.getElementById("assaultexcess").innerHTML = assaultTotalWeight - assaultLegLoading;
        var decline = (1 - (assaultLegLoading / assaultTotalWeight)) * 100;
        decline = (Math.round(decline * 100) / 100) * -1 + "%";
        document.getElementById("assaultDecline").innerHTML = decline;
    } else {
        document.getElementById("assaultResltSuccess").style.display = "block";
        document.getElementById("assaultResltCaution").style.display = "none";
    }
    /* Assault END */

    /* Heavy START */
    var heavyWeight = parseFloat(document.getElementById("heavyWeight").innerHTML);
    var heavyTotalWeight = machineWeight + heavyWeight;
    document.getElementById("heavyTotalWeight").innerHTML = heavyTotalWeight;
    var heavyLegLoading = legLoading + chipWeight;
    document.getElementById("heavyLegLoading").innerHTML = heavyLegLoading;

    if(heavyTotalWeight > heavyLegLoading) {
        document.getElementById("heavyResltSuccess").style.display = "none";
        document.getElementById("heavyResltCaution").style.display = "block";
        document.getElementById("heavyexcess").innerHTML = heavyTotalWeight - heavyLegLoading;
        var decline = (1 - (heavyLegLoading / heavyTotalWeight)) * 100;
        decline = (Math.round(decline * 100) / 100) * -1 + "%";
        document.getElementById("heavyDecline").innerHTML = decline;
    } else {
        document.getElementById("heavyResltSuccess").style.display = "block";
        document.getElementById("heavyResltCaution").style.display = "none";
    }
    /* Heavy END */

    /* Short START */
    var shortWeight = parseFloat(document.getElementById("shortWeight").innerHTML);
    var shortTotalWeight = machineWeight + shortWeight;
    document.getElementById("shortTotalWeight").innerHTML = shortTotalWeight;
    var shortLegLoading = legLoading + chipWeight;
    document.getElementById("shortLegLoading").innerHTML = shortLegLoading;

    if(shortTotalWeight > shortLegLoading) {
        document.getElementById("shortResltSuccess").style.display = "none";
        document.getElementById("shortResltCaution").style.display = "block";
        document.getElementById("shortexcess").innerHTML = shortTotalWeight - shortLegLoading;
        var decline = (1 - (shortLegLoading / shortTotalWeight)) * 100;
        decline = (Math.round(decline * 100) / 100) * -1 + "%";
        document.getElementById("shortDecline").innerHTML = decline;
    } else {
        document.getElementById("shortResltSuccess").style.display = "block";
        document.getElementById("shortResltCaution").style.display = "none";
    }
    /* Short END */

    /* Suport START */
    var suportWeight = parseFloat(document.getElementById("suportWeight").innerHTML);
    var suportTotalWeight = machineWeight + suportWeight;
    document.getElementById("suportTotalWeight").innerHTML = suportTotalWeight;
    var suportLegLoading = legLoading + chipWeight;
    document.getElementById("suportLegLoading").innerHTML = suportLegLoading;

    if(suportTotalWeight > suportLegLoading) {
        document.getElementById("suportResltSuccess").style.display = "none";
        document.getElementById("suportResltCaution").style.display = "block";
        document.getElementById("suportexcess").innerHTML = suportTotalWeight - suportLegLoading;
        var decline = (1 - (suportLegLoading / suportTotalWeight)) * 100;
        decline = (Math.round(decline * 100) / 100) * -1 + "%";
        document.getElementById("suportDecline").innerHTML = decline;
    } else {
        document.getElementById("suportResltSuccess").style.display = "block";
        document.getElementById("suportResltCaution").style.display = "none";
    }
    /* Suport END */

    return;
}

/**
 * 適正チップの上昇量設定
 */
function setAptude(){
    document.getElementById("aptudeWeight").innerHTML = 0;

    var selects = new Array();
    var heads = (document.getElementById("headName").innerText).split(/\n/);
    var index = document.getElementById("headName").selectedIndex;
    selects.push(heads[index]);

    var bodys = (document.getElementById("bodyName").innerText).split(/\n/);
    var index = document.getElementById("bodyName").selectedIndex;
    selects.push(bodys[index]);

    var arms = (document.getElementById("armName").innerText).split(/\n/);
    var index = document.getElementById("armName").selectedIndex;
    selects.push(arms[index]);

    var legs = (document.getElementById("legName").innerText).split(/\n/);
    var index = document.getElementById("legName").selectedIndex;
    selects.push(legs[index]);

    var checkAptudes = new Array();
    if(document.getElementById("cougar").checked){
        checkAptudes.push("クーガー");
    }

    if(document.getElementById("zebra").checked){
        checkAptudes.push("ツェーブラ");
    }

    if(document.getElementById("enfocer").checked){
        checkAptudes.push("エンフォーサー");
    }

    if(document.getElementById("discas").checked){
        checkAptudes.push("ディスカス");
    }

    if(document.getElementById("kisei").checked){
        checkAptudes.push("輝星");
    }
    
    if(document.getElementById("heavyGurd").checked){
        checkAptudes.push("ヘヴィガード");
    }

    if(document.getElementById("kefer").checked){
        checkAptudes.push("ケーファー");
    }

    if(document.getElementById("rosie").checked){
        checkAptudes.push("ロージー");
    }

    if(document.getElementById("shrike").checked){
        checkAptudes.push("シュライク");
    }

    if(document.getElementById("saber").checked){
        checkAptudes.push("セイバー");
    }

    if(checkAptudes.length > 0) {
        var matchCnt = 0;
        for( i = 0; i < checkAptudes.length ; i++){
            for( j = 0; j < selects.length ; j ++){
                if(selects[j].indexOf(checkAptudes[i]) != -1){
                    matchCnt++;
                }
            }
        }

        document.getElementById("aptudeWeight").innerHTML = matchCnt * 25;
    }

    return;
}

/**
 * チップ上昇量合計の設定
 */
function setChipWeight(){
    var weight1 = parseInt(document.getElementById("weight").value) * 40;
    var weight2 = parseInt(document.getElementById("weight2").value) * 60;
    var legPartsUp = parseInt(document.getElementById("legPartsUp").value) * 20;
    var aptude = parseInt(document.getElementById("aptudeWeight").innerHTML);

    var chipWeight = weight1 + weight2 + legPartsUp + aptude;
    document.getElementById("chipWeight").innerHTML = chipWeight;
}

/**
 * 強化前後の重量計算メソッド
 * @param {float} bef_weight 強化前の重量
 * @param {int} strengthCnt 強化値
 */
function calcStrengthWeight(bef_weight, strengthCnt){
    if (strengthCnt != "0"){
        return (parseInt(bef_weight) * 0.95).toString();
    }else {
        return bef_weight;
    }
}

/**
 * 脚パーツの重量耐性値取得
 */
async function getLegResistance(){
    var legs = (document.getElementById("legName").innerText).split(/\n/);
    var index = document.getElementById("legName").selectedIndex;
    var legName = legs[index];
    var strength = document.getElementById("legStrength").value;
    var url = 'http://localhost/bbps4/getLegResistance.php?legname=' + legName + '&strength=' + strength;

    return await (await fetch(url)).json();
}