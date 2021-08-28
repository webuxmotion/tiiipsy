import './styles.scss';
const { AwesomeQR } = require("awesome-qr");
import axios from './axios';

// new AwesomeQR({
//     text: "https://utippps.com/tip/3ffswer4345345?approve=true",
//     size: 500,
// }).draw().then((dataURL) => {
//     const img = new Image();
//     img.src = dataURL;
//     console.log(img);
//     document.getElementsByTagName('body')[0].append(img);

//     // axios({
//     //     method: "POST",
//     //     url: "/main/add-tip",
//     //     data: {
//     //       image: dataURL
//     //     }
//     //   }).then(res => {
//     //     console.log('res', res);
//     //   });
// });