function provjeraOdgovora() {
    var odgovor=documentforms[0].pitanje1.value;
    var odgovor=documentforms[0].pitanje2.value;
    var odgovor=documentforms[0].pitanje3.value;

    var brojTacnihOdgovora=0;
    if(odgovor1=="Triler") {
        brojTacnihOdgovora++;
    } else {
        document.getElementById("rezultat").innerHTML
        +="<p style=\"color: red\"> Tacan odgovor na ovo pitanje je Triler</p>";
    }
    if(odgovor2=="Rock") {
        brojTacnihOdgovora++;
    } else {
        document.getElementById("rezultat").innerHTML
        += "<p style=\"color: red\">Tacan odgovor na drugo pitanje je Rock</p>";

    }
    if(odgovor3=="Biciklizam") {
        brojTacnihOdgovora++;
    } else {
        document.getElementById("rezultat").innerHTML
        += "<p style=\"color: red\">Tacan odgovor na trece pitanje je Biciklizam</p>";

    }
    if(odgovor4=="Njemaki i Engleski") {
        brojTacnihOdgovora++;
    } else {
        document.getElementById("rezultat").innerHTML
        += "<p style=\"color: red\">Tacan odgovor na cevrto pitanje je Njemacki i Engleski</p>";
    }
    if(odgovor5=="Banjaluka") {
        brojTacnihOdgovora++;
    } else {
        document.getElementById("rezultat").innerHTML
        += "<p style=\"color: red\">Tacan odgovor na peto pitanje je Banjaluka</p>";

    }
    document.getElementById("rezultat").innerHTML +=
        "Broj tacnih odgovora: " + brojTacnihOdgovora;
}

