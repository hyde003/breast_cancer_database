
from django.conf.urls.defaults import patterns,url,include
from imput import views
urlpatterns = patterns('', 
	url(r'main/$',views.main,name='main_page'),

	)
