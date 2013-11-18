
from django.conf.urls.defaults import patterns,url
from report import views
urlpatterns = patterns('', 
	url(r'registration/$',views.register,name='registration'),
	