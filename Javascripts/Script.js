function RandomTextForAside() {
  let RandonerText = document.getElementById("RandText_p");
  let RandNumber = Math.round(Math.random()*10);
  console.log(RandNumber);
  switch (RandNumber) {
    case 1:
        RandonerText.innerHTML = "سلام دوست عزیز خوش اومدی !!";
      break;

    case 2:
        RandonerText.innerHTML = "به بی محتوا ترین وبلاگ دنیا خوش اومدید";
      break;

    case 3:
        RandonerText.innerHTML = "به بی محتوا ترین وبلاگ دنیا خوش اومدید";
      break;

    case 4:
        RandonerText.innerHTML = "این جا همه تحت درمان منید";
      break;

    case 5:
        RandonerText.innerHTML = "🫧🫧بلوب🫧 بلوب🫧 بلوب";
      break;

    case 6:
        RandonerText.innerHTML = "به وب سایت حبابی خوش اومدید";
      break;

    case 7:
        RandonerText.innerHTML = "هی خوشگله بپا نپوکی";
      break;

    case 8:
        RandonerText.innerHTML = "برای رشد و نمو کار ما با ایدی زیر در اینستاگرام در ارتباط باشید       @newfolder_4";
      break;

    case 9:
        RandonerText.innerHTML = "به ایستا، تلگرام، یوتوب، خونه، محل کار، ردیت، دیسکورد، سرزمین، x، لینکدین ما یه سری بزنینا خالی نزاریدشون";
      break;
    case 10:
        RandonerText.innerHTML = "سلام بچه عاشقتونیم (عشق معنوی منظورمونه)";
        break;
  }
}
