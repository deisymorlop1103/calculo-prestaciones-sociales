function social() {
    var pre1 = tdevengado();
    var pre2 = primas();
    var pre3 = vcesantias();
    var pre4 = interesc();
    var pre5 = vacas();
    var presta = pre1 + pre2 + pre3 + pre4 + pre5;
    document.forms["formulario"]["deven"].value = pre1;
    document.forms["formulario"]["prima"].value = pre2;
    document.forms["formulario"]["cesantias"].value = pre3;
    document.forms["formulario"]["intcesantias"].value = pre4;
    document.forms["formulario"]["vacaciones"].value = pre5;
    document.forms["formulario"]["prestac"].value = presta;
}

function auxilio() {
    var auxiliot = 106454;
    var salmin = 908526;
    var axs = document.forms["formularioe"]["sal"].value;
    if (parseInt(axs) <= (salmin * 2)) {
        document.forms["formularioe"]["tra"].value = auxiliot;
        document.forms["formularioe"]["transpo"].value = auxiliot;
    } else {
        document.forms["formularioe"]["tra"].value = 0;
        document.forms["formularioe"]["transpo"].value = 0;
    }
    auhe = horae();
    document.forms["formularioe"]["totalhe"].value = auhe;
    document.forms["formularioe"]["totalhex"].value = auhe;
}

function tdevengado() {
    var st1 = document.forms["formulario"]["sal"].value;
    var sc1 = document.forms["formulario"]["tra"].value;
    var sc2 = document.forms["formulario"]["com"].value;
    var aux = 106000;
    var rst = parseInt(st1) + parseInt(sc1) + parseInt(sc2);
    return rst;
}

function primas() {
    var p1 = tdevengado();
    var p2 = parseInt(p1) * 0.833;
    return p2;
}

function vcesantias() {
    var c1 = tdevengado();
    var c2 = parseInt(c1) * 0.833;
    return c2;
}

function interesc() {
    var i1 = vcesantias(); //var i1 = c2; esto no va ya que desconoce la c1
    var i2 = parseInt(i1) * 0.12;
    return i2;
}

function vacas() {
    var vac1 = document.forms["formulario"]["sal"].value;
    var vaca = parseInt(vac1) * 0.0416;
    return vaca;
}

function horae() {
    var hsal = parseInt(document.forms["formularioe"]["sal"].value) / 192;
    var hed = document.forms["formularioe"]["hediurna"].value;
    var vhed = hsal * parseInt(hed);
    var hen = document.forms["formularioe"]["henocturna"].value;
    var vhen = hsal * parseInt(hen);
    var hedf = document.forms["formularioe"]["hediurnaf"].value;
    var vhedf = hsal * parseInt(hedf);
    var henf = document.forms["formularioe"]["henocturnaf"].value;
    var vhenf = hsal * parseInt(henf);
    var sumahe = vhed + vhen + vhedf + vhenf;
    return sumahe;
}

function limpiarFormulario() {
    document.getElementById("formul").reset();
  }