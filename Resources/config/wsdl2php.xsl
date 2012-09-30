<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/"
    xmlns:xsd="http://www.w3.org/2001/XMLSchema"
    xmlns:php="http://php.net/xsl"
    xmlns:exslt="http://exslt.org/common"
    version="1.0" >

    <xsl:template match="/*[local-name()=&apos;definitions&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]" >

        <wsdl2php>

            <services>

                <xsl:for-each select="*[local-name()=&apos;service&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]" >

                    <service name="{@name}" >

                        <functions>

                            <xsl:for-each select="*[local-name()=&apos;port&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]" >

                                <xsl:for-each select="//*[local-name()=&apos;binding&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos; and 
                                        (@name=substring-after(current()/@binding,&apos;:&apos;) or 
                                        @name=current()/@binding)]" >

                                    <xsl:for-each select="//*[local-name()=&apos;portType&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos; and
                                            (@name=substring-after(current()/@type,&apos;:&apos;) or
                                            @name=current()/@type)]//
                                            *[local-name()=&apos;operation&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]" >

                                        <function name="{@name}" >

                                            <xsl:if test="//*[local-name()=&apos;message&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos; and
                                                    ((@name=current()/*[local-name()=&apos;input&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@name) or
                                                    (@name=current()/*[local-name()=&apos;input&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message) or
                                                    @name=substring-after(current()/*[local-name()=&apos;input&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message,&apos;:&apos;))]" >

                                                <parameters>

                                                    <xsl:apply-templates select="//*[local-name()=&apos;message&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos; and
    								                    ((@name=current()/*[local-name()=&apos;input&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@name) or
                                                    (@name=current()/*[local-name()=&apos;input&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message) or
                                                    @name=substring-after(current()/*[local-name()=&apos;input&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message,&apos;:&apos;))]" />
                                                </parameters>
                                            </xsl:if>

                                            <xsl:if test="//*[local-name()=&apos;message&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos; and
                                                    ((@name=current()/*[local-name()=&apos;output&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@name) or
                                                    (@name=current()/*[local-name()=&apos;output&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message) or
                                                    @name=substring-after(current()/*[local-name()=&apos;output&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message,&apos;:&apos;))]" >

                                                <returns>

                                                    <xsl:apply-templates select="//*[local-name()=&apos;message&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos; and
    								                    ((@name=current()/*[local-name()=&apos;output&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@name) or
                                                    (@name=current()/*[local-name()=&apos;output&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message) or
                                                    @name=substring-after(current()/*[local-name()=&apos;output&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message,&apos;:&apos;))]" />
                                                </returns>
                                            </xsl:if>

                                            <xsl:if test="//*[local-name()=&apos;message&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos; and
                                                    ((@name=current()/*[local-name()=&apos;fault&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@name) or
                                                    (@name=current()/*[local-name()=&apos;fault&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message) or
                                                    @name=substring-after(current()/*[local-name()=&apos;fault&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message,&apos;:&apos;))]" >

                                                <exceptions>

                                                    <xsl:apply-templates select="//*[local-name()=&apos;message&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos; and
    			 					                    ((@name=current()/*[local-name()=&apos;fault&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@name) or
                                                    (@name=current()/*[local-name()=&apos;fault&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message) or
                                                    @name=substring-after(current()/*[local-name()=&apos;fault&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]/@message,&apos;:&apos;))]" />
                                                </exceptions>
                                            </xsl:if>
                                        </function>
                                    </xsl:for-each>
                                </xsl:for-each>
                            </xsl:for-each>
                        </functions>
                    </service>
                </xsl:for-each>
            </services>

            <classes>

                <xsl:for-each select="*[local-name()=&apos;types&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]
                    //*[(local-name()=&apos;complexType&apos; or local-name()=&apos;simpleType&apos;) and 
                        not(starts-with(@name, &apos;ArrayOf&apos;))]" >

                    <class name="{@name | ../@name}" >

                        <xsl:if test=".//*[local-name()=&apos;extension&apos;]" >

                            <extends>

                                <xsl:choose>

                                    <xsl:when test="contains(.//*[local-name()=&apos;extension&apos;]/@base,&apos;:&apos;)" >

                                        <xsl:value-of select="substring-after(.//*[local-name()=&apos;extension&apos;]/@base,&apos;:&apos;)" />
                                    </xsl:when>

                                    <xsl:otherwise>

                                        <xsl:value-of select=".//*[local-name()=&apos;extension&apos;]/@base" />
                                    </xsl:otherwise>
                                </xsl:choose>
                            </extends>
                        </xsl:if>

                        <xsl:if test=".//*[local-name()=&apos;element&apos;]" >

                            <properties>

                                <xsl:apply-templates select=".//*[local-name()=&apos;element&apos;]" />
                            </properties>
                        </xsl:if>
                    </class>
                </xsl:for-each>
            </classes>
        </wsdl2php>
    </xsl:template>

    <xsl:template match="*[local-name()=&apos;message&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]" >

        <xsl:for-each select="*[local-name()=&apos;part&apos; and namespace-uri()=&apos;http://schemas.xmlsoap.org/wsdl/&apos;]" >

            <xsl:choose>

                <xsl:when test="@element" >

                    <xsl:call-template name="messagePart" >

                        <xsl:with-param
                            name="refnode"
                            select="current()" />

                        <xsl:with-param
                            name="name"
                            select="@name" />

                        <xsl:with-param
                            name="type"
                            select="@element" />
                    </xsl:call-template>
                </xsl:when>

                <xsl:when test="@type" >

                    <xsl:call-template name="messagePart" >

                        <xsl:with-param
                            name="refnode"
                            select="current()" />

                        <xsl:with-param
                            name="name"
                            select="@name" />

                        <xsl:with-param
                            name="type"
                            select="@type" />
                    </xsl:call-template>
                </xsl:when>

                <xsl:otherwise>

                    <xsl:call-template name="messagePart" >

                        <xsl:with-param
                            name="refnode"
                            select="current()" />

                        <xsl:with-param
                            name="name"
                            select="@name" />
                    </xsl:call-template>
                </xsl:otherwise>
            </xsl:choose>
        </xsl:for-each>
    </xsl:template>

    <xsl:template match="*[local-name()=&apos;element&apos; and namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos;]" >

        <xsl:choose>

            <xsl:when test="@ref and @name" >

                <xsl:call-template name="messagePart" >

                    <xsl:with-param
                        name="refnode"
                        select="current()" />

                    <xsl:with-param
                        name="name"
                        select="@name" />

                    <xsl:with-param
                        name="type"
                        select="@ref" />
                </xsl:call-template>
            </xsl:when>

            <xsl:when test="@ref and contains(@ref,&apos;:&apos;)" >

                <xsl:call-template name="messagePart" >

                    <xsl:with-param
                        name="refnode"
                        select="current()" />

                    <xsl:with-param
                        name="name"
                        select="substring-after(@ref,&apos;:&apos;)" />

                    <xsl:with-param
                        name="type"
                        select="@ref" />
                </xsl:call-template>
            </xsl:when>

            <xsl:when test="@ref" >

                <xsl:call-template name="messagePart" >

                    <xsl:with-param
                        name="refnode"
                        select="current()" />

                    <xsl:with-param
                        name="name"
                        select="@ref" />

                    <xsl:with-param
                        name="type"
                        select="@ref" />
                </xsl:call-template>
            </xsl:when>

            <xsl:when test="@type" >

                <xsl:call-template name="messagePart" >

                    <xsl:with-param
                        name="refnode"
                        select="current()" />

                    <xsl:with-param
                        name="name"
                        select="@name" />

                    <xsl:with-param
                        name="type"
                        select="@type" />
                </xsl:call-template>
            </xsl:when>

            <xsl:otherwise>

                <xsl:call-template name="messagePart" >

                    <xsl:with-param
                        name="refnode"
                        select="current()" />

                    <xsl:with-param
                        name="name"
                        select="@name" />
                </xsl:call-template>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

    <xsl:template name="messagePart" >

        <xsl:param name="refnode" />

        <xsl:param name="name" />

        <xsl:param name="type" />

        <xsl:choose>

            <xsl:when test="string-length($type)=0" >

                <xsl:choose>

                    <xsl:when test="$refnode[@maxOccurs=&apos;unbounded&apos;]" >

                        <entry
                            name="{$name}"
                            debug="1"
                            error="no type or element in message"
                            type="anyType[]" />
                    </xsl:when>

                    <xsl:otherwise>

                        <entry
                            name="{$name}"
                            debug="1"
                            error="no type or element in message"
                            type="anyType" />
                    </xsl:otherwise>
                </xsl:choose>
            </xsl:when>

            <xsl:when test="(substring-before($type,&apos;:&apos;)=&apos;xsd&apos;) or (substring-before($type,&apos;:&apos;)=&apos;xs&apos;)" >

                <xsl:choose>

                    <xsl:when test="$refnode[@maxOccurs=&apos;unbounded&apos;]" >

                        <entry
                            name="{$name}"
                            debug="2"
                            type="{substring-after($type,&apos;:&apos;)}[]" />
                    </xsl:when>

                    <xsl:otherwise>

                        <entry
                            name="{$name}"
                            debug="2"
                            type="{substring-after($type,&apos;:&apos;)}" />
                    </xsl:otherwise>
                </xsl:choose>
            </xsl:when>

            <xsl:when test="//*[local-name()=&apos;schema&apos; and namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos;]
                        /*[local-name()=&apos;element&apos; and namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos; 
                        and (@name=substring-after($type,&apos;:&apos;) or @name=$type)]" >

                <xsl:variable
                    name="matchedNode"
                    select="//*[local-name()=&apos;schema&apos; and namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos;]
                        /*[local-name()=&apos;element&apos; and namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos; 
                        and (@name=substring-after($type,&apos;:&apos;) or @name=$type)]" />

                <xsl:choose>

                    <xsl:when test="$matchedNode/@type" >

                        <xsl:choose>

                            <xsl:when test="contains($matchedNode/@type,&apos;:&apos;)" >

                                <xsl:choose>

                                    <xsl:when test="$refnode[@maxOccurs=&apos;unbounded&apos;]" >

                                        <entry
                                            name="{$name}"
                                            debug="3"
                                            type="{substring-after($matchedNode/@type,&apos;:&apos;)}[]" />
                                    </xsl:when>

                                    <xsl:otherwise>

                                        <entry
                                            name="{$name}"
                                            debug="3"
                                            type="{substring-after($matchedNode/@type,&apos;:&apos;)}" />
                                    </xsl:otherwise>
                                </xsl:choose>
                            </xsl:when>

                            <xsl:otherwise>

                                <xsl:choose>

                                    <xsl:when test="$refnode[@maxOccurs=&apos;unbounded&apos;]" >

                                        <entry
                                            name="{$name}"
                                            debug="3b"
                                            type="{$matchedNode/@type}[]" />
                                    </xsl:when>

                                    <xsl:otherwise>

                                        <entry
                                            name="{$name}"
                                            debug="3b"
                                            type="{$matchedNode/@type}" />
                                    </xsl:otherwise>
                                </xsl:choose>
                            </xsl:otherwise>
                        </xsl:choose>
                    </xsl:when>

                    <xsl:when test="$matchedNode/@name" >

                        <xsl:choose>

                            <xsl:when test="$refnode[@maxOccurs=&apos;unbounded&apos;]" >

                                <entry
                                    name="{$name}"
                                    debug="3c"
                                    type="{$matchedNode/@name}[]" />
                            </xsl:when>

                            <xsl:otherwise>

                                <entry
                                    name="{$name}"
                                    debug="3c"
                                    type="{$matchedNode/@name}" />
                            </xsl:otherwise>
                        </xsl:choose>
                    </xsl:when>

                    <xsl:otherwise>

                        <xsl:choose>

                            <xsl:when test="$refnode[@maxOccurs=&apos;unbounded&apos;]" >

                                <entry
                                    name="{$name}"
                                    debug="3d"
                                    error="bad element type def"
                                    type="{$name}[]" />
                            </xsl:when>

                            <xsl:otherwise>

                                <entry
                                    name="{$name}"
                                    debug="3d"
                                    error="bad element type def"
                                    type="{$name}" />
                            </xsl:otherwise>
                        </xsl:choose>
                    </xsl:otherwise>
                </xsl:choose>
            </xsl:when>

            <xsl:when test="//*[local-name()=&apos;schema&apos; and namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos;]
                        /*[local-name()=&apos;complexType&apos; and namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos; 
                        and (@name=substring-after($type,&apos;:&apos;) or @name=$type)]//*[@ref=&apos;soapenc:arrayType&apos;]" >

                <xsl:variable
                    name="typeref"
                    select="//*[local-name()=&apos;schema&apos; and 
                        namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos;]
                        /*[local-name()=&apos;complexType&apos; and namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos; 
                        and (@name=substring-after($type,&apos;:&apos;) or @name=$type)]//*[@ref=&apos;soapenc:arrayType&apos;]
                        /@*[local-name()=&apos;arrayType&apos;]" />

                <xsl:choose>

                    <xsl:when test="contains($typeref,&apos;:&apos;)" >

                        <entry
                            name="{$name}"
                            debug="4"
                            type="{substring-after($typeref,&apos;:&apos;)}" />
                    </xsl:when>

                    <xsl:otherwise>

                        <entry
                            name="{$name}"
                            debug="4b"
                            type="{$typeref}" />
                    </xsl:otherwise>
                </xsl:choose>
            </xsl:when>

            <xsl:when test="//*[local-name()=&apos;schema&apos; and namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos;]
                        /*[local-name()=&apos;complexType&apos; and namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos; 
                        and @name=substring-after($type,&apos;:&apos;)]" >

                <xsl:variable
                    name="typeref"
                    select="//*[local-name()=&apos;schema&apos; and 
                        namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos;]
                        /*[local-name()=&apos;complexType&apos; and namespace-uri()=&apos;http://www.w3.org/2001/XMLSchema&apos; 
                        and (@name=substring-after($type,&apos;:&apos;) or @name=$type)]/@name" />

                <xsl:choose>

                    <xsl:when test="contains($typeref,&apos;:&apos;)" >

                        <xsl:choose>

                            <xsl:when test="$refnode[@maxOccurs=&apos;unbounded&apos;]" >

                                <entry
                                    name="{$name}"
                                    debug="5"
                                    type="{substring-after($typeref,&apos;:&apos;)}[]" />
                            </xsl:when>

                            <xsl:otherwise>

                                <entry
                                    name="{$name}"
                                    debug="5"
                                    type="{substring-after($typeref,&apos;:&apos;)}" />
                            </xsl:otherwise>
                        </xsl:choose>
                    </xsl:when>

                    <xsl:otherwise>

                        <xsl:choose>

                            <xsl:when test="$refnode[@maxOccurs=&apos;unbounded&apos;]" >

                                <entry
                                    name="{$name}"
                                    debug="5b"
                                    type="{$typeref}[]" />
                            </xsl:when>

                            <xsl:otherwise>

                                <entry
                                    name="{$name}"
                                    debug="5b"
                                    type="{$typeref}" />
                            </xsl:otherwise>
                        </xsl:choose>
                    </xsl:otherwise>
                </xsl:choose>
            </xsl:when>

            <xsl:otherwise>

                <xsl:choose>

                    <xsl:when test="$refnode[@maxOccurs=&apos;unbounded&apos;]" >

                        <entry
                            name="{$name}"
                            debug="6"
                            error="uninterpreted"
                            fname="{name($refnode)}"
                            lname="{local-name($refnode)}"
                            type="{$type}[]"
                            uri="{namespace-uri($refnode)}" />
                    </xsl:when>

                    <xsl:otherwise>

                        <entry
                            name="{$name}"
                            debug="6"
                            error="uninterpreted"
                            fname="{name($refnode)}"
                            lname="{local-name($refnode)}"
                            type="{$type}"
                            uri="{namespace-uri($refnode)}" />
                    </xsl:otherwise>
                </xsl:choose>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

</xsl:stylesheet>