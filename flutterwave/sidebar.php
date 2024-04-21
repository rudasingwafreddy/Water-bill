<nav id="sidebar">
                <div class="sidebar-header">
                    <h3>RP projects</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>
                        <?php
                        if (isset($_SESSION['rp'])) {
                            $var=$_SESSION['rp'];
                            echo $var;
                        }else{
                            echo "User";
                        }
                        
                        ?>
                        <!-- <% if(session.getAttribute("rp")!=null){ %>
                        
                        <%= session.getAttribute("rp") %>
                        
                        <% }else{ %>
                        User
                        <%
                        } %> -->
                        
                    </p>
                    
                    <li>
                        <a href="http://localhost:8080/firstwebApp/user/home.jsp" target="_blank">Dashboard</a>
                    </li>                    
                    
<!--                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Projects</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="newproject.jsp">New Project</a>
                            </li>
                            <li>
                                <a href="viewprojects.jsp">All projects</a>
                            </li>
                        </ul>
                    </li>-->
                    <li>
                        <a href="http://localhost:8080/firstwebApp/user/home.jsp" target="_blank">Projects</a>
                    </li>
                    <li>
                        <!-- <a href="#">Payment</a> -->
                    </li>
<!--                    <li>
                        <a href="upload.jsp">Upload</a>
                    </li>
                    <li>
                        <a href="view.jsp">view</a>
                    </li>-->
                </ul>

<!--                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                    </li>
                    <li>
                        <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                    </li>
                </ul>-->

                <ul class="list-unstyled">
                    <li>
                        <a href="http://localhost:8080/firstwebApp/user/help.jsp" target="_blank">Help</a>
                    </li> 
                </ul>


            </nav>