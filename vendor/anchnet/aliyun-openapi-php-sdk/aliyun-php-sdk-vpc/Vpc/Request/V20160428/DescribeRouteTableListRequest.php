<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Vpc\Request\V20160428;

class DescribeRouteTableListRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Vpc", "2016-04-28", "DescribeRouteTableList", "vpc", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $bandwidth;

	private  $ownerAccount;

	private  $ownerId;

	private  $pageNumber;

	private  $routerType;

	private  $kbpsBandwidth;

	private  $routeTableName;

	private  $routerId;

	private  $vpcId;

	private  $resourceUid;

	private  $pageSize;

	private  $resourceBid;

	private  $routeTableId;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getBandwidth() {
		return $this->bandwidth;
	}

	public function setBandwidth($bandwidth) {
		$this->bandwidth = $bandwidth;
		$this->queryParameters["Bandwidth"]=$bandwidth;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getPageNumber() {
		return $this->pageNumber;
	}

	public function setPageNumber($pageNumber) {
		$this->pageNumber = $pageNumber;
		$this->queryParameters["PageNumber"]=$pageNumber;
	}

	public function getRouterType() {
		return $this->routerType;
	}

	public function setRouterType($routerType) {
		$this->routerType = $routerType;
		$this->queryParameters["RouterType"]=$routerType;
	}

	public function getKbpsBandwidth() {
		return $this->kbpsBandwidth;
	}

	public function setKbpsBandwidth($kbpsBandwidth) {
		$this->kbpsBandwidth = $kbpsBandwidth;
		$this->queryParameters["KbpsBandwidth"]=$kbpsBandwidth;
	}

	public function getRouteTableName() {
		return $this->routeTableName;
	}

	public function setRouteTableName($routeTableName) {
		$this->routeTableName = $routeTableName;
		$this->queryParameters["RouteTableName"]=$routeTableName;
	}

	public function getRouterId() {
		return $this->routerId;
	}

	public function setRouterId($routerId) {
		$this->routerId = $routerId;
		$this->queryParameters["RouterId"]=$routerId;
	}

	public function getVpcId() {
		return $this->vpcId;
	}

	public function setVpcId($vpcId) {
		$this->vpcId = $vpcId;
		$this->queryParameters["VpcId"]=$vpcId;
	}

	public function getResourceUid() {
		return $this->resourceUid;
	}

	public function setResourceUid($resourceUid) {
		$this->resourceUid = $resourceUid;
		$this->queryParameters["ResourceUid"]=$resourceUid;
	}

	public function getPageSize() {
		return $this->pageSize;
	}

	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		$this->queryParameters["PageSize"]=$pageSize;
	}

	public function getResourceBid() {
		return $this->resourceBid;
	}

	public function setResourceBid($resourceBid) {
		$this->resourceBid = $resourceBid;
		$this->queryParameters["ResourceBid"]=$resourceBid;
	}

	public function getRouteTableId() {
		return $this->routeTableId;
	}

	public function setRouteTableId($routeTableId) {
		$this->routeTableId = $routeTableId;
		$this->queryParameters["RouteTableId"]=$routeTableId;
	}
	
}