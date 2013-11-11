
from django.conf.urls.defaults import patterns,url
from report import views
urlpatterns = patterns('', 
	url(r'input/$',views.input,name='input'),
)

