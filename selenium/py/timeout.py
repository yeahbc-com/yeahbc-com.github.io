from selenium import webdriver
from selenium.common.exceptions import TimeoutException
import time

startTime = time.time()
print "start time is: %0.3f"%startTime
driver = webdriver.Firefox()
driver.set_page_load_timeout(5)
driver.maximize_window()

try:
    driver.get("https://www.tomtop.com")
except TimeoutException:
    driver.execute_script('window.stop()')
    
print driver.title

driver.quit()