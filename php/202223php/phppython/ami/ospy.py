import os
#print(os.getcwd())
#os.mkdir("amios1",)
#os.chdir("amios")
#os.makedirs('x\y\z')
#os.rmdir('x\y\z')
#os.makedirs('new-file/sub-file')
#os.removedirs('new-file/sub-file')
#import shutil
#shutil.rmtree('new-file') 
#os.rename("amios","newos")
path = 'C:\wamp'
for root, dirs, files in os.walk(path):
        print(root)
        print(dirs)
        print(files)
