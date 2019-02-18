const http = require('http');
const dirname = '../var/www/html';
const hostname = '104.248.70.89';
const port = 8083;

const server = http.createServer((req, res) => {
  res.statusCode = 200;//8083
  res.setHeader('Content-Type', 'text/plain');
  res.end('Group members\nCheng Zan, Weiwen Hong, Kuo Liang!!!!');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});

/*var express = require('express');
var app = express();
var bodyParser = require('body-parser');
var urlencodedParser = bodyParser.urlencoded({extended: false})

app.use(express.static('public'));
//app.use(express.static(path.join(__dirname, 'static')));
app.use(function(req, res, next) {
   if (req.url === '/toto') {
     req.url = '/heytoto';
   }
	console.log(req.url);
   next();
});

app.get('/', function(req, res) {
        res.sendFile(__dirname+"/" + "index.html");
})
app.get('/hellodata', function (req, res){
      response = {
                msg : req.query.response
        };
//	if(req.query.reponse == "JSON")
	res.end(JSON.stringify(response));
        res.end();
})
app.listen(8083, '104.248.70.89', function() {
});*/

