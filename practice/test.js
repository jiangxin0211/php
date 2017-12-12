var http=require('http');

http.createServer(function(req,res){
    res.writeHead(200,{'Content-type':'text/plain'});//content-type按照什么语法解析,charset解析字符值UTF-8解码方式
    res.end('hello');
}).isten(3000);

console.log('server start');

// MIME：409种 image/jpeg  text/html text/plain   RFC2457
