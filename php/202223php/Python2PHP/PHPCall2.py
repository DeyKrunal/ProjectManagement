import subprocess

# if the script don't need output.
#subprocess.call("php Test.php")

# if you want output
proc = subprocess.Popen("php Test.php", shell=True, stdout=subprocess.PIPE)
#script_response = proc.stdout.read()
script_response = proc.stdout.read()
print(script_response)