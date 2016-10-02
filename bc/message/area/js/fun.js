function Edit(pla, viw, post, mess, rel, ema, site, date) {
  document.getElementById("placename").value = pla;
  document.getElementById("viewpoint").value = viw;
  document.getElementById("posted").value = post;
  document.getElementById("messages").value = mess;
  document.getElementById("replys").value = rel;
  document.getElementById("email").value = ema;
  document.getElementById("site").value = site;
  // document.getElementById("datetime").value = date;
  // $('#placename').text(pla);
  // $('#viewpoint').text(viw);
  // $('#posted').text(post);
  // $('#messages').text(mess);
  // $('#replys').text(rel);
  // $('#email').text(ema);
  // $('#site').text(site);
  $('#datetime').text(date);

}
