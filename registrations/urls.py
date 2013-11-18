
from django.conf.urls.defaults import patterns,url
from registrations import views
urlpatterns = patterns('', 
	url(r'register/$',views.register,name='register'),
	#url(r'/report/$',report.views.index,name='index'),
	#url(r'logout/$',views.login,name='login'),
	#url(r'logout/$',views.logout,name='logout'),
	)

