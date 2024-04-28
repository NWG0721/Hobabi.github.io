function RandomTextForAside() {
  let RandonerText = document.getElementById("RandText_p");
  let RandNumber = Math.round(Math.random()*10);
  console.log(RandNumber);
  switch (RandNumber) {
    case 1:
        RandonerText.innerHTML = "سلام دوست عزیز خوش اومدی !!";
      break;

    case 2:
        RandonerText.innerHTML = "به بی محتوا ترین وبلاگ دنیا خوش اومدید🖐️";
      break;

    case 3:
        RandonerText.innerHTML = "سلام من به تو یار صمیمی منم همون سایت ساز قدیمی";
      break;

    case 4:
        RandonerText.innerHTML = "این جا همه تحت درمان منید💉";
      break;

    case 5:
        RandonerText.innerHTML = "🫧🫧بلوب🫧 بلوب🫧 بلوب";
      break;

    case 6:
        RandonerText.innerHTML = "به وب سایت حبابی🫧 خوش اومدید";
      break;

    case 7:
        RandonerText.innerHTML = "هی خوشگله بپا نپوکی😏";
      break;
    case 8:
        RandonerText.innerHTML = "به شبکه های اجتماعی ما سر بزنید لطفا";
      break;
    case 9:
        RandonerText.innerHTML = "🩷💚سلام بچه عاشقتونیم🩷💚 (عشق معنوی منظورمونه)";
        break;
        default:
          RandonerText.innerHTML = "ناراحتم مثل وبلاگ نویسی که چیزی برای نوشتن نداره😢";
        break;
  }
}
function PlayPouse(){
}
//------------------------------| Music API |------------------------------//
//------------------------------| Music API |------------------------------//