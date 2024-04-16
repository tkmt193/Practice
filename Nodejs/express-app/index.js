var express = require('express');
var ejs =require("ejs");

var app = express();
app.engine('ejs',ejs.renderFile);
app.use(express.static('public'));

var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({extended: false}));

var data = {
    'Taro':'taro@yamada',
    'Hanako':'hanako@flower',
    'Sachiko':'sachico@happy',
    'Ichiro':'ichiro@baseball'
}

//トップページ
app.get('/', (req, res) => {
    var msg ='This is Index Page!<br>' + 'メッセージを書いて送信';
    res.render('index.ejs',
    {
        title: 'index',
        content: msg,
        data:data,
    });
});


var server = app.listen(3000, () => {
    console.log('Start is running');
})