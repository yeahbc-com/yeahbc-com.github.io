# -*- coding: utf-8 -*-
from selenium import webdriver
from selenium.common.exceptions import TimeoutException
from selenium.webdriver.common.action_chains import ActionChains
import time
import re


def categoryTrans(txt):
	pattern = re.compile(r'\w')
	list1 = list(txt)
	list2 = []
	for i in range(len(list1)):
		if pattern.match(list1[i]):
			list2.append(list1[i])
		elif not pattern.match(list1[i]) and pattern.match(list1[i-1]):
			list2.append('-')
	return ''.join(list2).lower()


def categoryComp(txt, txt2):
	txt = txt + '-'
	if txt2[:len(txt)] == txt:
		print "category name match"
		for ch in txt2[len(txt):]:
			if not re.compile(r'\d').match(ch):
				print "category id not match"
	else:
		print "category name not match" + "|" + txt + "|" + txt2


startTime = time.time()
print "start time is: %0.3f"%startTime
driver = webdriver.Chrome()
driver.set_page_load_timeout(10)
#driver.maximize_window()

try:
    driver.get("https://www.tomtop.com")
except TimeoutException:
    driver.execute_script('window.stop()')
    
sidelists = driver.find_elements_by_class_name('sidelist')
i = 0
for sidelist in sidelists:
	ActionChains(driver).move_to_element(sidelist).perform()
	cat1 = sidelist.find_element_by_class_name('sidelistA')
	print cat1.text

	submenu = sidelist.find_element_by_css_selector('div.submenu.lbBox')

	subSecond = submenu.find_element_by_css_selector('div.lineBlock.subSecond')
	cat2s = subSecond.find_elements_by_tag_name('a')
	for cat2 in cat2s:
		print cat2.get_attribute('title')
		ActionChains(driver).move_to_element(cat2).perform()
		if i == 0:
			continue
		subThird = submenu.find_element_by_css_selector('dl.lineBlock.subThird.thirdBlock')
		cat3s = subThird.find_elements_by_tag_name('a')
		for cat3 in cat3s:
			print cat3.text
	i = i+1



		


	
	print i, '---------------------------------'
	

#time.sleep(60)
driver.quit()