#!/usr/bin/env python
from ftplib import FTP, sys

url = sys.argv[1] # os.environ["GIT_FTP_URL"]
credentials, host = url[6:-1].rsplit("@", 1)
user, password = credentials.split(":", 1)

current_version = open("./public/site/templates/static/.current-version", "r").read().strip()
# print host, user, current_version

ftp = FTP(host, user, password)
ftp.set_debuglevel(1)

def rm_tree(d):
  try:
    ftp.cwd(d)
    for f in ftp.nlst():
      if f == "." or f == "..": continue
      try: ftp.delete(f)
      except: rm_tree(f)
    ftp.cwd("..")
    ftp.rmd(d)
  except: pass

ftp.cwd("site/templates/static")
for d in ftp.nlst():
  if d != current_version and d.find("455375-") >= 0:
    rm_tree(d)

ftp.quit()
