var pitanja = [
  {
      tekst: "1.Koji filmski zanr preferira autor ovog sajta?",
      odgovor1: "Triler",
      odgovor2: "Komedije",
      odgovor3: "Horore",
      tacanOdgovor: "Triler"
  },
  {
      tekst: "2.Koju vrstu muzike preferira autor ovog sajta?",
      odgovor1: "Rock",
      odgovor2: "Balade",
      odgovor3: "Folk",
      tacanOdgovor: "Rock"
  },
{
      tekst: "3.Koji je omiljeni hobi autora ovog sajta?",
      odgovor1: "Setnja",
      odgovor2: "Plivanje",
      odgovor3: "Biciklizam",
      tacanOdgovor: "Biciklizam"
  },
  {
      tekst: "4.Koje strane jezike govori autor ovog sajta?",
      odgovor1: "Njemacki i Engleski",
      odgovor2: "Ruski i Svedski",
      odgovor3: "Talijanski i Grcki",
      tacanOdgovor: "Njemacki i Engleski"
  },
  {
      tekst: "5.U kojem gradu je rodjen autor ovog sajta?",
      odgovor1: "Zagreb",
      odgovor2: "Drvar",
      odgovor3: "Banjaluka",
      tacanOdgovor: "Banjaluka"
  }
];

function prikaziPitanja() {
  var div = document.getElementById("pitanja");
  var form = "<form action=\"javascript:obradiOdgovore()\">";

  for (i = 0; i < pitanja.length; i++) {
      form += "<p>" + (i + 1) + ". " + pitanja[i].tekst + "</p>";

      form += "<input type=\"radio\" name=\"odgovor" + i + "\" value=\""
          + pitanja[i].odgovor1 + "\"/>" + pitanja[i].odgovor1 + "<br/>";

      form += "<input type=\"radio\" name=\"odgovor" + i + "\" value=\""
          + pitanja[i].odgovor2 + "\"/>" + pitanja[i].odgovor2 + "<br/>";

      form += "<input type=\"radio\" name=\"odgovor" + i + "\" value=\""
          + pitanja[i].odgovor3 + "\"/>" + pitanja[i].odgovor3 + "<br/>";

  }
  form += "<input type=\"submit\" value=\"Obradi odgovore\"/></form>";

  div.innerHTML = form;
}

function obradiOdgovore() {
  var form = document.forms[0];
  var brojTacnihOdgovora = 0;
  var poruka = "";

  for (i = 0; i < pitanja.length; i++) {
      if (form['odgovor' + i].value == pitanja[i].tacanOdgovor) {
          brojTacnihOdgovora++;
      } else {
          poruka += "<p style=\"color:red\">Tacan odgovor na "
              + (i + 1) + " pitanje je " + pitanja[i].tacanOdgovor;
      }
  }

  poruka += "<p>Broj tacnih odgovora: "
      + brojTacnihOdgovora + "</p>";

  document.getElementById("rezultat").innerHTML = poruka;
}