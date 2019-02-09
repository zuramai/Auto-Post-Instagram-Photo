import subprocess
import time



delay = 10 # UBAH DELAY DALAM DETIK
i = 0 
max = 9999 # MAKSIMAL JUMLAH UPLOAD FOTO

while i < max:
	subprocess.call("php upload.php")
	print("Uploaded! wait for {} sec".format(delay)) 

	time.sleep(delay)
	i += 1

