import subprocess
proc = subprocess.Popen("php demo1.php", shell=True, stdout=subprocess.PIPE)
script_response = proc.stdout.read()
print(script_response) 
