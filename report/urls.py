
from django.conf.urls.defaults import patterns,url
from report import views
urlpatterns = patterns('', 
	url(r'input/$',views.input,name='input'),
	url(r'physician_login/$',views.physician_login,name='physician'),
)

