// This example uses the ftp library, which can be installed via npm
var ftp = require("ftp");

var ftpClient = new ftp();
ftpClient.on("ready", function() {
  ftpClient.list(function(err, list) {
    if (err) throw err;
    console.log(list);
    ftpClient.end();
  });
});

ftpClient.connect({
  host: "hostname",
  user: "username",
  password: "password"
});
