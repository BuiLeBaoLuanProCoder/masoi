const {MessageActionRow, MessageButton} = citnut.Discord
const allowedMentions = citnut.allowedMentions

const imgtaixiu = {
      xucxac1: "https://i.imgur.com/Q2PYVYW.jpg",
      xucxac2: "https://i.imgur.com/cpxUdAf.jpg",
      xucxac3: "https://i.imgur.com/ycYljaR.jpg",
      xucxac4: "https://i.imgur.com/xjrpbWU.jpg",
      xucxac5: "https://i.imgur.com/kHvYMcE.jpg",
      xucxac6: "https://i.imgur.com/fC3aNnu.jpg",
      gif: "https://pdp.edu.vn/wp-content/uploads/2021/01/anh-dong-gif-anime-dep.gif"
    }

const row = new MessageActionRow().addComponents(
			new MessageButton()
				.setCustomId('mobat')
				.setLabel('Mở bát')
				.setStyle('PRIMARY'),
        new MessageButton()
				.setCustomId('vutbat')
				.setLabel('Vứt bát')
				.setStyle('PRIMARY')
			)

module.exports = {
  command: ["taixiuv2"],
  author: "Hercules, Citnut",
	description: "",
	guide: "",
	allowListening: false,
  allowInteraction: true,
	async listen (data) {},
   async interaction (data) {
    
var ketqua1 = [1,2,3,4,5,6];
var ketqua2 = [1,2,3,4,5,6];
var ketqua3 = [1,2,3,4,5,6];
var rdkq1 = ketqua1[Math.floor(Math.random() * ketqua1.length)];
var rdkq2 = ketqua2[Math.floor(Math.random() * ketqua2.length)];
var rdkq3 = ketqua3[Math.floor(Math.random() * ketqua3.length)];
var tong = rdkq1 + rdkq2 + rdkq3
var anh1 = imgtaixiu["xucxac"+rdkq1]
var anh2 = imgtaixiu["xucxac"+rdkq2]
var anh3 = imgtaixiu["xucxac"+rdkq3]
var xiu = [3, 4, 5, 6, 7, 8, 9, 10];
var tai = [11,12,13,14,15,16,17,18];
     let {customId} = data
        if (!data.isButton()) return
        //console.log(data)
     switch (customId) {
            case "mobat":
            citnut.send(`1 2 3...`, data)

if (xiu.includes(tong)) {
await setTimeout(() => citnut.send(`Xúc xắc số 1: ${rdkq1} `+imgtaixiu["xucxac"+rdkq1], data), 100);
await setTimeout(() => citnut.send(`Xúc xắc số 2: ${rdkq2} `+imgtaixiu["xucxac"+rdkq2], data), 300)
await setTimeout(() => citnut.send(`Xúc xắc số 3: ${rdkq3} `+imgtaixiu["xucxac"+rdkq3], data), 500)
  setTimeout(() => citnut.send(`Xỉu ${tong}`, data), 1000)
}
else if (tai.includes(tong)) {
setTimeout(() => citnut.send({embeds:[citnut.defaultemb(`Xúc xắc số 1: ${rdkq1}`, data).setImage(anh1)],"allowedMentions":citnut.allowedMentions}), 100);
setTimeout(() => citnut.send({embeds:[citnut.defaultemb(`Xúc xắc số 2: ${rdkq2}`, data).setImage(anh2)],"allowedMentions":citnut.allowedMentions}), 300);
setTimeout(() => citnut.send({embeds:[citnut.defaultemb(`Xúc xắc số 3: ${rdkq3}`, data).setImage(anh3)],"allowedMentions":citnut.allowedMentions}), 500);
  setTimeout(() => citnut.send(`Tài ${tong}`, data), 1000)
}

            break
            default:
            break
    }
 
  },
	async call (data) {
   
await citnut.send("Đang Đập, À Không Đang Lắc!"+imgtaixiu.gif, data);
	
        const embeds = [citnut.defaultemb("Vui lòng nhập lựa chọn")]
		return data.reply({embeds, allowedMentions, components: [row]})
}
}
