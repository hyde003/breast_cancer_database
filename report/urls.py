
from django.conf.urls.defaults import patterns,url
from report import views
urlpatterns = patterns('', 
	url(r'main/$',views.main,name='main_page'),
	url(r'physician_login/$',views.physician_login,name='physician'),
	url(r'patient_login/$',views.patient_login,name='patient'),
	url(r'curator_login/$',views.curator_login,name='patient'),
	)

