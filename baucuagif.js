module.exports = {
  command: ["baucuagif"],
  author: "Hercules",
	description: "",
	guide: "",
	allowListening: false,
	async listen (data) {},
	async call (data) {
        var request = require("request");const { readdirSync, readFileSync, writeFileSync, existsSync, copySync, createWriteStream, createReadStream } = require("fs-extra");
        if (!existsSync(__dirname + '/data/ga.jpg')) {
            request('https://i.imgur.com/jPdZ1Q8.jpg').pipe(createWriteStream(__dirname + '/data/ga.jpg'));
        }
        if (!existsSync(__dirname + '/data/tom.jpg')) {
            request('https://i.imgur.com/4214Xx9.jpg').pipe(createWriteStream(__dirname + '/data/tom.jpg'));
        }
        if (!existsSync(__dirname + '/data/bau.jpg')) {
            request('https://i.imgur.com/4KLd4EE.jpg').pipe(createWriteStream(__dirname + '/data/bau.jpg'));
        }
        if (!existsSync(__dirname + '/data/cua.jpg')) {
            request('https://i.imgur.com/s8YAaxx.jpg').pipe(createWriteStream(__dirname + '/data/cua.jpg'));
        }
        if (!existsSync(__dirname + '/data/ca.jpg')) {
            request('https://i.imgur.com/YbFzAOU.jpg').pipe(createWriteStream(__dirname + '/data/ca.jpg'));
        }
        if (!existsSync(__dirname + '/data/nai.jpg')) {
            request('https://i.imgur.com/UYhUZf8.jpg').pipe(createWriteStream(__dirname + '/data/nai.jpg'));
        }
        if (!existsSync(__dirname + '/data/baucua.gif')) {
            request('https://i.imgur.com/dlrQjRL.gif').pipe(createWriteStream(__dirname + '/data/baucua.gif'));
        }
    async function get(one,two,three) {
        var x1;
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
        var x2;
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
        var x3;
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
        var all = [x1, x2, x3];
    return full = all;
    }
    const slotItems = ["ga", "tom", "bau", "cua", "ca", "nai"];
    var text = citnut.tools.getParam(data.content)
	  if (!text)
	  return citnut.send(`[𝑷𝑮🐧] => Hãy Bấm : /baucua [bầu/cua/cá/nai/gà/tôm] [số tiền]`, data)
    var number = []
    let win = false;
    for (let i = 0; i < 3; i++) number[i] = slotItems[Math.floor(Math.random() * slotItems.length)];
        var itemm;
            var icon;
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
                                default: return citnut.send("[𝑷𝑮🐧] => Hãy Bấm : /baucua [bầu/cua/cá/nai/gà/tôm] [số tiền]", data);
                }      
                await get(number[0],number[1],number[2]);
            citnut.send({body:"[𝑷𝑮🐧] => Đang Đập, À Không Đang Lắc!",attachment: createReadStream(__dirname + "/data/baucua.gif")}, data);
    var array = [number[0],number[1],number[2]];
        var listimg = [];
           for (let string of array) {
               listimg.push(createReadStream(__dirname + `/data/${string}.jpg`));
           }
        if (array.includes(itemm)) {
            var i = 0;
                if (array[0] == itemm) i+=1;
                    if (array[1] == itemm) i+=1;
                if (array[2] == itemm) i+=1;
            if (i == 1) {
                        return citnut.send({body:`[𝑷𝑮🐧] => Kết Quả : ${full.join("|")}\n[✤] => Bạn thắng Vì Có 1 ${icon}!`,attachment: listimg}, data);
            }
            else if (i == 2) {
                        return citnut.send({body:`[𝑷𝑮🐧] => Kết Quả : ${full.join("|")}\n[✤] => Bạn thắng,Vì Có 2 ${icon}!`,attachment: listimg}, data);
            }
            else if (i == 3) {
                        return citnut.send({body:`[𝑷𝑮🐧] => Kết Quả : ${full.join("|")}\n[✤] => Bạn thắng,Vì Có 3 ${icon}!`,attachment: listimg}, data);
            }
            else return citnut.send("[𝑷𝑮🐧] => Lỗi ! Code : XX1N", data);
        } else  {
            return citnut.send({body:`[𝑷𝑮🐧] => Kết Quả : ${full.join("|")}\n[✤] => Bạn thua,Vì Có 0 ${icon}!`,attachment: listimg}, data);
        }
    }
  }
