# cadmin

tomcat-10.1.54/webapps/ROOT.war]
14-May-2026 08:26:21.580 SEVERE [Catalina-utility-1] org.apache.catalina.startup.HostConfig.deployWAR Error deploying web application archive [/ebiz/install/apache-tomcat-10.1.54/webapps/ROOT.war]
        java.lang.IllegalStateException: Error starting child
                at org.apache.catalina.core.ContainerBase.addChildInternal(ContainerBase.java:600)
                at org.apache.catalina.core.ContainerBase.addChild(ContainerBase.java:569)
                at org.apache.catalina.core.StandardHost.addChild(StandardHost.java:665)
                at org.apache.catalina.startup.HostConfig.deployWAR(HostConfig.java:962)
                at org.apache.catalina.startup.HostConfig$DeployWar.run(HostConfig.java:1900)
                at java.base/java.util.concurrent.Executors$RunnableAdapter.call(Unknown Source)
                at java.base/java.util.concurrent.FutureTask.run(Unknown Source)
                at org.apache.tomcat.util.threads.InlineExecutorService.execute(InlineExecutorService.java:81)
                at java.base/java.util.concurrent.AbstractExecutorService.submit(Unknown Source)
                at org.apache.catalina.startup.HostConfig.deployWARs(HostConfig.java:766)
                at org.apache.catalina.startup.HostConfig.deployApps(HostConfig.java:417)
                at org.apache.catalina.startup.HostConfig.check(HostConfig.java:1667)
                at org.apache.catalina.startup.HostConfig.lifecycleEvent(HostConfig.java:296)
                at org.apache.catalina.util.LifecycleBase.fireLifecycleEvent(LifecycleBase.java:109)
                at org.apache.catalina.core.ContainerBase.backgroundProcess(ContainerBase.java:971)
                at org.apache.catalina.core.ContainerBase$ContainerBackgroundProcessor.processChildren(ContainerBase.java:1170)
                at org.apache.catalina.core.ContainerBase$ContainerBackgroundProcessor.processChildren(ContainerBase.java:1174)
                at org.apache.catalina.core.ContainerBase$ContainerBackgroundProcessor.run(ContainerBase.java:1152)
                at java.base/java.util.concurrent.Executors$RunnableAdapter.call(Unknown Source)
                at java.base/java.util.concurrent.FutureTask.runAndReset(Unknown Source)
                at java.base/java.util.concurrent.ScheduledThreadPoolExecutor$ScheduledFutureTask.run(Unknown Source)
                at java.base/java.util.concurrent.ThreadPoolExecutor.runWorker(Unknown Source)
                at java.base/java.util.concurrent.ThreadPoolExecutor$Worker.run(Unknown Source)
                at org.apache.tomcat.util.threads.TaskThread$WrappingRunnable.run(TaskThread.java:63)
                at java.base/java.lang.Thread.run(Unknown Source)
        Caused by: org.apache.catalina.LifecycleException: Failed to start component [StandardEngine[Catalina].StandardHost[localhost].StandardContext[]]
                at org.apache.catalina.util.LifecycleBase.handleSubClassException(LifecycleBase.java:404)
                at org.apache.catalina.util.LifecycleBase.start(LifecycleBase.java:179)
                at org.apache.catalina.core.ContainerBase.addChildInternal(ContainerBase.java:597)
                ... 24 more
        Caused by: java.lang.IllegalArgumentException: The servlets named [StatsServlet] and [com.middleware.servlet.StatsServlet] are both mapped to the url-pattern [/api/stats] which is not permitted
                at org.apache.tomcat.util.descriptor.web.WebXml.addServletMappingDecoded(WebXml.java:415)
                at org.apache.tomcat.util.descriptor.web.WebXml.addServletMapping(WebXml.java:406)
                at org.apache.catalina.startup.ContextConfig.processAnnotationWebServlet(ContextConfig.java:2546)
                at org.apache.catalina.startup.ContextConfig.processClass(ContextConfig.java:2252)
                at org.apache.catalina.startup.ContextConfig.processAnnotationsStream(ContextConfig.java:2241)
                at org.apache.catalina.startup.ContextConfig.processAnnotationsWebResource(ContextConfig.java:2152)
                at org.apache.catalina.startup.ContextConfig.processAnnotationsWebResource(ContextConfig.java:2147)
                at org.apache.catalina.startup.ContextConfig.processAnnotationsWebResource(ContextConfig.java:2147)
                at org.apache.catalina.startup.ContextConfig.processAnnotationsWebResource(ContextConfig.java:2147)
                at org.apache.catalina.startup.ContextConfig.processClasses(ContextConfig.java:1360)
                at org.apache.catalina.startup.ContextConfig.webConfig(ContextConfig.java:1270)
                at org.apache.catalina.startup.ContextConfig.configureStart(ContextConfig.java:971)
                at org.apache.catalina.startup.ContextConfig.lifecycleEvent(ContextConfig.java:288)
                at org.apache.catalina.util.LifecycleBase.fireLifecycleEvent(LifecycleBase.java:109)
                at org.apache.catalina.core.StandardContext.startInternal(StandardContext.java:4368)
                at org.apache.catalina.util.LifecycleBase.start(LifecycleBase.java:164)
                ... 25 more
14-May-2026 08:26:21.582 INFO [Catalina-utility-1] org.apache.catalina.startup.HostConfig.deployWAR Deployment of web application archive [/ebiz/install/apache-tomcat-10.1.54/webapps/ROOT.war] has finished in [23] ms

