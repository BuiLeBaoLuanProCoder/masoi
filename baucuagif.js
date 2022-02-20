module.exports = {
  command: ["baucuagif"],
  author: "Hercules, Citnut",
	description: "",
	guide: "",
	allowListening: false,
	async listen (data) {},
	async call (data) {
		const baucua = { ga: "https://i.imgur.com/jPdZ1Q8.jpg", 
			     tom: "https://i.imgur.com/4214Xx9.jpg",
			     bau: "https://i.imgur.com/4KLd4EE.jpg",
			     cua: "https://i.imgur.com/s8YAaxx.jpg",
			     ca: "https://i.imgur.com/YbFzAOU.jpg",
			     nai: "https://i.imgur.com/UYhUZf8.jpg",
			     gif: "https://i.imgur.com/dlrQjRL.gif"
			    }
        
      
      
    async function get(one,two,three) {
      let x1;
            switch (one) {
                case "ga": x1 = "🐓";
                    break;
                case "tom": x1 = '🦞';
                    break;
                case "bau": x1 = '🍐';
                    break;
                case "cua": x1 = '🦀';
                    break;
                case "ca": x1 = '🐟';
                    break;
                case "nai":x1 = '🦌';
            }
        let x2;
            switch (two) {
                case "ga": x2 = "🐓";
                    break;
                case "tom": x2 = '🦞';
                    break;
                case "bau": x2 = '🍐';
                    break;
                case "cua": x2 = '🦀';
                    break;
                case "ca": x2 = '🐟';
                    break;
                case "nai": x2 = '🦌';
            }
        let x3;
            switch (three) {
                case "ga": x3 = "🐓";
                    break;
                case "tom": x3 = '🦞';
                    break;
                case "bau": x3 = '🍐';
                    break;
                case "cua": x3 = '🦀';
                    break;
                case "ca": x3 = '🐟';
                    break;
                case "nai":x3 = '🦌';
            }
    return [x1, x2, x3]
    }
    const slotItems = ["ga", "tom", "bau", "cua", "ca", "nai"];
    let text = citnut.tools.getParam(data.content)
	  if (!text) return citnut.send(`[𝑷𝑮🐧] => Hãy Bấm : "+citnut.config.prefix+"baucua [bầu/cua/cá/nai/gà/tôm] [số tiền]`, data)
   let array = []
    let win = false;
    for (let i = 0; i < 3; i++) array[i] = slotItems[Math.floor(Math.random() * slotItems.length)];
        var itemm;
          let icon;
                switch (text) {
                    case "bầu":
                        case "Bầu": itemm = "bau";
                                icon = '🍐';
                            break;
                    case "cua": 
                        case "Cua": itemm = "cua";
                                icon = '🦀';
                            break;
                    case "cá":
                        case "Cá": itemm = "ca";
                                icon = '🐟';
                            break;
                    case "nai":
                        case "Nai": itemm = "nai";
                                icon = '🦌';
                            break;
                    case "gà": 
                        case "Gà": itemm = "ga";
                                icon = '🐓';
                            break;
                    case "tôm":
                        case "Tôm": itemm = "tom";
                                icon = '🦞';
                            break;
                                default: return citnut.send("[𝑷𝑮🐧] => Hãy Bấm : "+citnut.config.prefix+"baucua [bầu/cua/cá/nai/gà/tôm] [số tiền]", data);
                }     
                await get(...array);
            await citnut.send("[𝑷𝑮🐧] => Đang Đập, À Không Đang Lắc! "+baucua.gif, data);
    
        let listimg = [];
           for (let string of array) {
               listimg.push(baucua[string]);
           }
        if (array.includes(itemm)) {
            let i = 0;
                if (array[0] == itemm) i+=1;
                    if (array[1] == itemm) i+=1;
                if (array[2] == itemm) i+=1;
            if (i == 1) {
                        return citnut.send(`[𝑷𝑮🐧] => Kết Quả : ${array.join("|")}\n[✤] => Bạn thắng Vì Có 1 ${icon}! `+listimg.join(" "), data);
            }
            else if (i == 2) {
                        return citnut.send(`[𝑷𝑮🐧] => Kết Quả : ${array.join("|")}\n[✤] => Bạn thắng,Vì Có 2 ${icon}! `+listimg.join(" "), data);
            }
            else if (i == 3) {
                        return citnut.send(`[𝑷𝑮🐧] => Kết Quả : ${array.join("|")}\n[✤] => Bạn thắng,Vì Có 3 ${icon}! `+listimg.join(" "), data);
            }
            else return citnut.send("[𝑷𝑮🐧] => Lỗi ! Code : XX1N", data);
        } else  {
            return citnut.send(`[𝑷𝑮🐧] => Kết Quả : ${array.join("|")}\n[✤] => Bạn thua,Vì Có 0 ${icon}! `+listimg.join(" "), data);
        }
    }
  }
