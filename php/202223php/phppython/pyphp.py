import subprocess
proc = subprocess.Popen("php c:/wamp/www/test/p1.php", shell=True, stdout=subprocess.PIPE)
script_response = proc.stdout.read()
print(script_response)